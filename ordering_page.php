<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./css/styling.css">
     <title>Ordering</title>
</head>
<body>
     <div style="display: flex; flex-direction: column; align-items: center; gap: 24px; z-index: 0; position: relative;">
          <div style="display: flex; flex-direction: column; align-items: center; width: 100%;">
               <?php include './components/headerDisplay.php'?>
               <?php include './components/navBar.php'?>
          </div>
          <?php include './components/filtersSlider.php'?>
          <?php include './components/productDisplay.php'?>
     </div>
     <button style="background-color: black; width: 80px; height: 80px; z-index: 20; border-radius: 100px; bottom: 35px; position: fixed; right: 35px; color: white; display: flex; align-items: center; justify-content: center; border: none;">
          <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M6 12H18M12 6V18" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
     </button>
</body>
</html>