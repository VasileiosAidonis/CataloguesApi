<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catalogue</title>
    <link rel="stylesheet" href="dist/app.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
  <div class="container text-center">
    <a class="navbar-brand d-flex pt-4">
       <div><img src="/svg/mf.svg" style="height:40px; border-right:2px solid #333;" class="pr-3 pl-5"></div>
       <div class="h2 pl-3">MyFlix</div>
       <div class="h5 pr-5 d-flex justify-content-end"><a href="/">Home</div>
    </a>
       <div id="app">
           <div class="row">
              <div class="h5 col-3 p-4 pl-4">
                  <a href="#">Get Recommendations</a>
              </div>

           </div>
           <div class="h4 text-left pl-5 pb-2"><?php echo e($catalogue->where('id', 1)->first()->name); ?></div>
           <div class="row pb-5">
               <div class="col-3 w-100">
                  First video<a href="/videos1/1"><img alt="Ocean.jpg" src="http://vjs.zencdn.net/v/oceans.png" decoding="async" width="220" height="300" data-file-width="220" data-file-height="300" style="border:1px solid #9999;"></a>
               </div>
               <div class="col-3 w-100">
                  Movie 2<img alt="Star Wars The Rise of Skywalker poster.jpg" src="//upload.wikimedia.org/wikipedia/en/a/af/Star_Wars_The_Rise_of_Skywalker_poster.jpg" decoding="async" width="220" height="300" data-file-width="220" data-file-height="300" style="border:1px solid #9999;">
               </div>
               <div class="col-3 w-100">
                  Movie 3<img alt="Star Wars The Rise of Skywalker poster.jpg" src="//upload.wikimedia.org/wikipedia/en/a/af/Star_Wars_The_Rise_of_Skywalker_poster.jpg" decoding="async" width="220" height="300" data-file-width="220" data-file-height="300" style="border:1px solid #9999;">
               </div>
               <div class="col-3 w-100">
                  Movie 4<img alt="Star Wars The Rise of Skywalker poster.jpg" src="//upload.wikimedia.org/wikipedia/en/a/af/Star_Wars_The_Rise_of_Skywalker_poster.jpg" decoding="async" width="220" height="300" data-file-width="220" data-file-height="300" style="border:1px solid #9999;">
               </div>
           </div>
           <div class="h4 text-left pl-5 pb-2 pt-2"><?php echo e($catalogue->where('id', 2)->first()->name); ?></div>
           <div class="row  pb-5">
               <div class="col-3 w-100">
                  Second Video<a href="/videos1/2"><img alt="Elephants_dream.jpg" src="http://d2zihajmogu5jn.cloudfront.net/elephantsdream/poster.png" decoding="async" width="220" height="300" data-file-width="259" data-file-height="300" style="border:1px solid #9999;"></a>
               </div>
               <div class="col-3 w-100">
                  Movie 2<img alt="Star Wars The Rise of Skywalker poster.jpg" src="//upload.wikimedia.org/wikipedia/en/a/af/Star_Wars_The_Rise_of_Skywalker_poster.jpg" decoding="async" width="220" height="300" data-file-width="220" data-file-height="006" style="border:1px solid #9999;">
               </div>
               <div class="col-3 w-100">
                  Movie 3<img alt="Star Wars The Rise of Skywalker poster.jpg" src="//upload.wikimedia.org/wikipedia/en/a/af/Star_Wars_The_Rise_of_Skywalker_poster.jpg" decoding="async" width="220" height="300" data-file-width="220" data-file-height="300" style="border:1px solid #9999;">
               </div>
               <div class="col-3 w-100">
                  Movie 4<img alt="Star Wars The Rise of Skywalker poster.jpg" src="//upload.wikimedia.org/wikipedia/en/a/af/Star_Wars_The_Rise_of_Skywalker_poster.jpg" decoding="async" width="220" height="300" data-file-width="220" data-file-height="300" style="border:1px solid #9999;">
                </div>
           </div>
           <div class="h4 text-left pl-5 pb-2 pt-2"><?php echo e($catalogue->where('id', 3)->first()->name); ?></div>
           <div class="row pb-5">
               <div class="col-3 w-100">
                  Third Video<a href="/videos1/3"><img alt="Techslides.jpg" src="https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg" decoding="async" width="220" height="300" data-file-width="259" data-file-height="300" style="border:1px solid #9999;"></a>
               </div>
               <div class="col-3 w-100">
                  Movie 2<img alt="Bad Boys for Life - teaser poster.jpg" src="//upload.wikimedia.org/wikipedia/en/thumb/3/31/Bad_Boys_for_Life_-_teaser_poster.jpg/220px-Bad_Boys_for_Life_-_teaser_poster.jpg" decoding="async" width="220" height="300" data-file-width="259" data-file-height="300" style="border:1px solid #9999;">
               </div>
               <div class="col-3 w-100">
                 Movie 3<img alt="Bad Boys for Life - teaser poster.jpg" src="//upload.wikimedia.org/wikipedia/en/thumb/3/31/Bad_Boys_for_Life_-_teaser_poster.jpg/220px-Bad_Boys_for_Life_-_teaser_poster.jpg" decoding="async" width="220" height="300" data-file-width="259" data-file-height="300" style="border:1px solid #9999;">
               </div>
               <div class="col-3 w-100">
                  Movie 4<img alt="Bad Boys for Life - teaser poster.jpg" src="//upload.wikimedia.org/wikipedia/en/thumb/3/31/Bad_Boys_for_Life_-_teaser_poster.jpg/220px-Bad_Boys_for_Life_-_teaser_poster.jpg" decoding="async" width="220" height="300" data-file-width="259" data-file-height="300" style="border:1px solid #9999;">
                </div>
           </div>
      </div>
      <script src="dist/app.js"></script>
  </div>
</body>
</html>
