// functions/ebay-hash.js
const crypto = require('crypto');

exports.handler = async (event, context) => {
    try {
        const { queryStringParameters } = event;
        const { challenge_code } = queryStringParameters;

        // My actual values on Netlify
        const endpoint = process.env.EBAY_ENDPOINT; 
        const yourVerificationToken = process.env.EBAY_VERIFICATION_TOKEN; 

        const hash = crypto.createHash('sha256');
        hash.update(challenge_code);
        hash.update(yourVerificationToken);
        hash.update(endpoint);
        const responseHash = hash.digest('hex');
        console.log(new Buffer.from(responseHash).toString());

        return {
            statusCode: 200,
            headers: {
                'Content-Type': 'application/json', // Set the Content-Type header
            },
            body: JSON.stringify({ challengeResponse: responseHash }),
        };
    } catch (error) {
        return {
            statusCode: 500,
            body: JSON.stringify({ error: 'Internal server error' }),
        };
    }
};
