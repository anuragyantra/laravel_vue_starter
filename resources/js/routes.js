export default [{
        path: "/dashboard",
        component: require("./components/Dashboard.vue").default
    },
    {
        path: "/profile",
        component: require("./components/Profile.vue").default
    },
    { path: "/users", component: require("./components/Users.vue").default },
    {
        path: "/products",
        component: require("./components/product/Products.vue").default
    },
    {
        path: "/product/category",
        component: require("./components/product/Category.vue").default
    },
    {
        path: "/podcastAudience",
        component: require("./components/podmaps/PodcastAudience.vue").default
    },
    {
        path: "/podcastRankings",
        component: require("./components/podmaps/PodcastRankings.vue").default
    },

    {
        path: "/podcastRankingsTable",
        component: require("./components/podmaps/PodcastRankingsTable.vue")
            .default
    },

    {
        path: "/podcastSEO",
        component: require("./components/podmaps/PodcastSEO.vue").default
    },

    {
        path: "/podcastOptimization",
        component: require("./components/podmaps/PodcastOptimization.vue")
            .default
    },
    { path: "*", component: require("./components/NotFound.vue").default }
];