export default {
    '/guide/': [
        {
            text: 'Guide',
            children: [
                '/guide/README.md',
                {
                    text: 'Entities',
                    link: '/guide/entities/README.md',
                    children: [
                        '/guide/entities/api-proxy.md',
                        '/guide/entities/api-product.md',
                        '/guide/entities/developer.md',
                        '/guide/entities/company.md',
                        '/guide/entities/developer-app.md',
                        '/guide/entities/company-app.md',
                        '/guide/entities/app-key.md',
                    ]
                }
            ]
        },
        {
            text: 'Monetization',
            link: '/monetization/README.md'
        }
    ],
    '/monetization/': [
        {
            text: 'Guide',
            link: '/guide/README.md',
        },
        {
            text: 'Monetization',
            link: '/monetization/README.md',
            children: [
                '/monetization/README.md',
            ]
        }
    ]
}
