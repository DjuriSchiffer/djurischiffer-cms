const PortfolioItems = {
  slug: "portfolio",
  auth: true,
  admin: {
    useAsTitle: "email",
  },
  access: {
    read: () => true,
  },
  fields: [
    // Add more fields as needed
  ],
};

export default PortfolioItems;
