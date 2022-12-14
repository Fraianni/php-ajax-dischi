<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js" integrity="sha512-0qU9M9jfqPw6FKkPafM3gy2CBAvUWnYVOfNPDYKVuRTel1PrciTj+a9P3loJB+j0QmN2Y0JYQmkBBS8W+mbezg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.7.13/vue.min.js" integrity="sha512-9PmLIATEd4w0OxdTHq61p12lQqa8OtDC6nXu0+S1Icb800oxoADle+gaPfmAXLa35KSvk/6bGeNRfi3nq0Hvvw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="../style/style.css">
    <title>Dischi</title>
    <script src="./script/script.js" defer></script>
</head>

<body>
    <div id="app">
        <!-- <input type="text" v-model="toSearch" @keyup.enter="filterGenres"> -->
        <div class="cards">
            <div class="card" v-for="(disco, index) of dischi" :key="index">
                <img :src="disco.poster" alt="">
                <p>{{disco.title}}</p>
                <p>{{disco.author}}</p>
                <p>{{disco.genre}}</p>

            </div>
        </div>

    </div>
</body>

</html>