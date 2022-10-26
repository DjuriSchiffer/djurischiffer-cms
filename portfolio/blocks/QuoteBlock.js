const QuoteBlock = {
  slug: "Quote", // required
  fields: [
    // required
    {
      name: "quoteHeader",
      type: "text",
      required: true,
    },
    {
      name: "quoteText",
      type: "text",
    },
  ],
};

export default QuoteBlock;
