<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Payment Failed</title>
    <script src="https://unpkg.com/vue@next"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <style media="screen">
      div{
        margin:18%;
        text-align: center;
      }
    </style>
  </head>
  <body id="app">
    <payment-failed></payment-failed>
    <script src="./main.js" charset="utf-8"></script>
    <script src="./components.js" charset="utf-8"></script>
    <script type="text/javascript">
      const mountedApp = app.mount('#app')
    </script>
  </body>
</html>
