<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <title>AkifumiWorks</title>
</head>
<style>
  body {
    background-color: #f0ede1;
    background-image: linear-gradient(10deg, rgba(255, 255, 255, 0.1) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.1) 75%, transparent 75%, transparent),
      linear-gradient(100deg, rgba(255, 255, 255, 0.1) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.1) 75%, transparent 75%, transparent);
    background-size: 20px 20px;
    box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.1), inset 5px 5px 15px rgba(0, 0, 0, 0.1);
    height: 100vh;
    margin: 0;
  }

  #logo-frame {
    max-width: 1000px;
    width: 100%;
    margin: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 60%;
  }

  #hito-frame {
    z-index: 10;
    position: absolute;
    bottom: 20%;
    left: 16%;
  }

  #ground {
    position: absolute;
    bottom: 0%;
    width: 100%;
    height: 20%;
    background: linear-gradient(to bottom, #ffbc00, #ffd633);
    box-shadow: 12px -24px #fce29c;
    z-index: 0;
  }
</style>

<body>
  <div id="logo-frame">
    <img id="top-image" src="./images/top.png" width="200" />
  </div>
  <div id="ground"></div>
</body>

</html>
