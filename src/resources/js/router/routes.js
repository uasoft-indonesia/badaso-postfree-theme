import Pages from "./../pages/index.vue";

let prefix = process.env.MIX_ADMIN_PANEL_ROUTE_PREFIX
  ? "/" + process.env.MIX_ADMIN_PANEL_ROUTE_PREFIX
  : "/badaso-dashboard";

export default [
  {
    path: prefix + "/postfree-theme-configuration",
    name: "PostfreeThemeConfigurationBrowse",
    component: Pages,
    meta: {
      title: "Postfree Theme Configuration",
      useComponent: "AdminContainer"
    },
  },
];
