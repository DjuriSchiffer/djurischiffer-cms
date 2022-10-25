import { buildConfig } from "payload/config";
import PortfolioItems from "./collections/PortfolioItems";
import Users from "./collections/Users";

export default buildConfig({
  serverURL: "http://localhost:3000",
  admin: {
    user: Users.slug,
  },
  collections: [PortfolioItems, Users],
});
