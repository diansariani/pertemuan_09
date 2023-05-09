<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>
<body>
    
    <div id="artikel1">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget ante finibus felis pulvinar consectetur non non turpis. 
        Suspendisse nec imperdiet erat, quis porttitor enim. Quisque a mauris egestas, bibendum turpis non, ullamcorper nibh. 
        Vivamus laoreet auctor dui, vitae mollis massa consectetur ac. Duis placerat risus a fringilla porta. 
        Nullam faucibus augue nec leo commodo blandit. Vivamus orci risus, gravida non consequat non, dictum sed neque. 
        Vestibulum eget nibh urna. Vivamus ipsum sem, efficitur et eleifend ullamcorper, cursus at leo. 
        Aliquam libero ipsum, imperdiet id odio porttitor, iaculis ultricies nisi. Morbi ullamcorper at nisl quis cursus. 
        Quisque non arcu finibus, ornare sem eget, convallis purus. 
        Nunc placerat odio eget orci pellentesque, sit amet congue nisi rhoncus. Maecenas quis ornare justo.
    </div>

    <div class="artikel2">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget ante finibus felis pulvinar consectetur non non turpis. 
        Suspendisse nec imperdiet erat, quis porttitor enim. Quisque a mauris egestas, bibendum turpis non, ullamcorper nibh. 
        Vivamus laoreet auctor dui, vitae mollis massa consectetur ac. Duis placerat risus a fringilla porta. 
        Nullam faucibus augue nec leo commodo blandit. Vivamus orci risus, gravida non consequat non, dictum sed neque. 
        Vestibulum eget nibh urna. Vivamus ipsum sem, efficitur et eleifend ullamcorper, cursus at leo. 
        Aliquam libero ipsum, imperdiet id odio porttitor, iaculis ultricies nisi. Morbi ullamcorper at nisl quis cursus. 
        Quisque non arcu finibus, ornare sem eget, convallis purus. 
        Nunc placerat odio eget orci pellentesque, sit amet congue nisi rhoncus. Maecenas quis ornare justo.
    </div>

    <script>
        document.getElementById("artikel1").style.color = "red";

        const obj = document.getElementsByClassName("artikel2");
        obj[0].style.color = "blue";
    </script>
</body>
</html>