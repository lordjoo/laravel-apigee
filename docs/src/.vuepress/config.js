import {defaultTheme, defineUserConfig} from 'vuepress'
import { searchPlugin } from '@vuepress/plugin-search'
import sidebar from "./config/sidebar";

export default defineUserConfig({
    lang: 'en-US',
    title: 'Laravel Apigee',
    description: 'A client to interact with Apigee API Management',
    head:[
        ['link', { rel: 'icon', href: '/logo.png' }]
    ],
    theme: defaultTheme({
        logo: '/logo.png',
        navbar: [
            {
                text: 'Guide',
                link: '/guide/',
            },
            {
                text: "Monetization",
                link: "/monetization/"
            },
            {
                text: 'API Reference',
                link: 'https://apidocs.apigee.com/operations#quick-nav'
            },
            {
                text: 'GitHub',
                target: '_blank',
                link: 'https://github.com'
            }
        ],
        sidebar: sidebar

    }),
    plugins:[
        searchPlugin({})
    ],
})
