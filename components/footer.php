<style>
    footer {
        min-height: 15vh;
        padding: 20px 50px;
        background-color: #2196f3;
        display: flex;
        width: 100%;
        align-items: center;
        justify-content: space-between;
    }

    footer li {
        margin: 10px 0;
    }

    footer a {
        color: white;
        text-decoration: none;
        background-color: coral;
        padding: 15px 50px;
        border-radius: 8px;
    }

    @media screen and (max-width: 600px) {
        footer {
            padding: 24px;
            flex-direction: column;
            width: 100%;
            align-items: center;
            justify-content: center;
            text-align: center;
            gap: 20px;
        }
    }
</style>
<footer>
    <ul>
        <li>
            <b>
                <p> Adres </p>
            </b>
        </li>
        <li>
            <p> Broekdijk Oost 45 </p>
        </li>
        <li>
            <p> 3621 LM Brooklyn</p>
        </li>
    </ul>

    <ul>
        <li>
            <b>
                <p>contact</p>
            </b>
        </li>
        <li>
            <p> info@loi.brooklynwebdesign.nl</p>
        </li>
        <li>
            <p> +31 346 261 226</p>
        </li>
    </ul>
    <a href="https://www.google.nl/maps/dir//Broekdijk Oost 45 3621 LM Breukelen" class="route">Routebeschrijving</a>
</footer>

<script src="js/menu.js"></script>
</body>