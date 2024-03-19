// functions/ebay-hash.js
const crypto = require('crypto');

exports.handler = async (event, context) => {
    try {
        const { httpMethod, queryStringParameters } = event;
        const { challenge_code } = queryStringParameters;

        // Your actual values (replace with your own)
        const endpoint = process.env.EBAY_ENDPOINT;
        const yourVerificationToken = process.env.EBAY_VERIFICATION_TOKEN;

        if (httpMethod === 'POST') {
            // Return a 204 No Content response for POST requests
            return {
                statusCode: 204,
                headers: {
                    'Content-Type': 'application/json',
                },
                body: '',
            };
        } else if (httpMethod === 'GET') {
            // Return hash on GET request
            const hash = crypto.createHash('sha256');
            hash.update(challenge_code);
            hash.update(yourVerificationToken);
            hash.update(endpoint);
            const responseHash = hash.digest('hex');

            return {
                statusCode: 200,
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ challengeResponse: responseHash }),
            };
        } else {
            // Return a 405 Method Not Allowed for other HTTP methods
            return {
                statusCode: 405,
                body: JSON.stringify({ error: 'Method Not Allowed' }),
            };
        }
    } catch (error) {
        return {
            statusCode: 500,
            body: JSON.stringify({ error: 'Internal server error' }),
        };
    }
};
