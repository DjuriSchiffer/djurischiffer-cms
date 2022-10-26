import QuoteBlock from "../blocks/QuoteBlock";

const PortfolioItems = {
  slug: "portfolio",
  admin: {
    // this is the name of a field which will be visible for the edit screen and is also used for relationship fields
    useAsTitle: "title",
  },
  access: {
    read: ({ user }) => {
      if (user) {
        return true;
      }
    },
  },
  fields: [
    {
      name: "title",
      type: "text",
    },
    {
      name: "layout",
      label: "Page Layout",
      type: "blocks",
      minRows: 1,
      blocks: [QuoteBlock],
    },
  ],
};

export default PortfolioItems;
