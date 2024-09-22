self.addEventListener('install', (event) => {
  event.waitUntil(
    caches.open('matrix-cache').then((cache) => {
      return cache.addAll([
        'index.php',
        'css/styles.css',
        'manifest.json',
        'js/main.min.js',
        'install.php',
        'js/main.js',
        'offline.html',
        '/'
      ]);
    })
  );
});

self.addEventListener('fetch', (event) => {
  event.respondWith(
    caches.match(event.request).then((response) => {
      return response || fetch(event.request).catch(() => {
        return caches.match('offline.html'); // Поверніть сторінку офлайн, якщо ресурс недоступний
      });
    })
  );
});
