// netlify/functions/hello.mts (or .js)
import type { Request, Context } from "@netlify/functions";

export default async (req: Request, context: Context) => {
  return new Response("Hello, world!");
};
