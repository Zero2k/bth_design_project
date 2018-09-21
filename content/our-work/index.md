---
views:
    main:
        template: default/article
        data:
            class: blog

    byline: false
    share-this: false
    block-about: false
    article-toc: false

    blog-list:
        region: main
        template: work/our-work
        sort: 2
        data:
            dateFormat: j F Y
            meta: 
                type: toc
                items: 10

...
Our Work
===========================

Dagens foto presenteras med en kort beskrivning om hur det gick till när bilden togs.
