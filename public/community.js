<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Communauté</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        section {
            margin: 20px;
        }

        #postInput {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }

        #postList {
            list-style: none;
            padding: 0;
        }

        .post {
            background-color: #fff;
            border: 1px solid #ddd;
            margin-bottom: 10px;
            padding: 10px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Communauté</h1>
    </header>

    <section>
        <textarea id="postInput" placeholder="Exprimez-vous..."></textarea>
        <button onclick="addPost()">Publier</button>

        <ul id="postList"></ul>
    </section>

    <script>
        function addPost() {
            var postInput = document.getElementById('postInput');
            var postList = document.getElementById('postList');

            if (postInput.value.trim() !== '') {
                var post = document.createElement('li');
                post.className = 'post';
                post.textContent = postInput.value;
                postList.appendChild(post);

                // Réinitialiser le champ de saisie après la publication
                postInput.value = '';
            }
        }
    </script>

</body>
</html>

