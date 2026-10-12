
## Анализ robots.txt сайта приюта "Солнцево".

**Ссылка**: [priut-sun.ru/robots.txt](https://priut-sun.ru/robots.txt)

```txt
User-Agent: *
```
Данная строчка говорит о том, что правила устанавливаются для всех роботов

```txt
Disallow: /page54386855.html
Disallow: /header
Disallow: /page54515125.html
Disallow: /address
Disallow: /tilda/form*
Disallow: /tilda/rec*
Disallow: /tilda/click*
Disallow: /tilda/scroll*
Disallow: /tilda/popup*
Disallow: /tilda/cart*
Disallow: /tilda/product*
Disallow: /tilda/event*
Disallow: /*_escaped_fragment_*
```

Disallow - задает правило для роботов, запрещает им индексировать 13 страниц. 
звёздочка в имени означает что кроме указанной формы url, могут быть любые символы и эти url тоже запрещены для индексации.

Здесь сайт запрещает индексировать служебные страницы (click, scroll, popup и т.п) а так же страницу корзины cart, что правильно, эти страницы не нужны для поисковых роботов.

```txt
Disallow:
``` 
Disallow с пустой строкой. Разрешает индексировать все страницы сайта, которые не запрещены правилами выше.

```txt
Sitemap: http://priut-sun.ru/sitemap.xml
Sitemap: http://priut-sun.ru/sitemap-store.xml
Sitemap: http://priut-sun.ru/sitemap-feeds.xml
```

Указаны карты сайта. Помогает роботам индексировать страницы. 

```txt
Host: priut-sun.ru
```
Указывает на основное зеркало сайта. Использовалось только яндексом, гугл и остальные роботы ее игнорировали. C 2018 года считается устаревшей. Вместо неё рекомендуется использовать 301-редиректы с дополнительных зеркал на основной домен.

robots.txt для priut-sun.ru настроен правильно, синтаксис корректный, есть sitemap.