<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Landing Page</title>
  <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html, body {
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 16px;
        }
        
        .showPage {
            background: url(barcelona.jpg)center;
            background-size: cover;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
            margin-bottom: 10px;
        }
        
        .showPage h1 {
            color: #fff;
            font-size: 3.5rem;
        }
        
        .showPage p {
            color: #fff;
            font-size: 1.5rem;
        }
        
        .btn-1 {
            background: #ff9966;
            border: none;
            color: #fff;
            cursor: pointer;
            padding: 10px 20px;
            text-transform: uppercase;
            font-size: .8rem;
            margin-top: 20px;
            transition: all .5s ease-in-out;
        }
        
        .btn-1:hover {
            background: #cc4400;
        }
        
        #section-1 {
            text-align: center;
            padding: 40px;
        }
        
        #section-1 h1 {
            margin-bottom: 20px;
        }
        
        #section-2 {
            margin-bottom: 20px;
        }
        
        #section-2 h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .flex-columns {
            display: flex;
            padding: 20px;
        }
        
        footer {
            min-height: 150px;
            background: #f6f6f6;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }
  </style>
</head>
<body>

  <header class="showPage">
    <h1>Barcelona Landing Page</h1>
    <p>All about this beautiful country</p>
    <button type="button" class="btn-1">Read About</button>
  </header>

  <section id="section-1">
    <h1>About Barcelona</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis dolores, facilis repellendus aspernatur fuga in,
      dolor dolorum nihil iusto odit at accusamus, magnam aliquam doloribus inventore vitae necessitatibus. Quis autem temporibus, iste tempora nostrum ut quos dolore accusamus vitae. Fugiat accusantium rerum, itaque cumque quae asperiores et, tempora molestiae dignissimos aperiam aspernatur, assumenda voluptatibus! Rem, eius, dolorem. Quos alias recusandae numquam voluptas iste vero, quia praesentium culpa distinctio natus eum sed corporis fugit odit
      sapiente quisquam quaerat cumque rerum nam soluta aut itaque.
      Alias assumenda libero, quis itaque. Laudantium molestias magni
      dolores consequuntur officiis quibusdam obcaecati corporis totam
      error fuga?</p>
  </section>

  <section id="section-2">
    <h1>Some Cool Stories</h1>
    <div class="flex-columns">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Ipsum voluptate laborum exercitationem delectus perspiciatis
        nemo unde fuga alias, porro similique distinctio adipisci sint
        quisquam atque culpa eum ipsa assumenda, quidem, odit officiis
        expedita ea illum nisi libero! Modi voluptatem iste nulla tenetur
        expedita doloremque, impedit aliquam sed adipisci repellendus at.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          Ipsum voluptate laborum exercitationem delectus perspiciatis
          nemo unde fuga alias, porro similique distinctio adipisci sint
          quisquam atque culpa eum ipsa assumenda, quidem, odit officiis
          expedita ea illum nisi libero! Modi voluptatem iste nulla tenetur
          expedita doloremque, impedit aliquam sed adipisci repellendus at.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Ipsum voluptate laborum exercitationem delectus perspiciatis
            nemo unde fuga alias, porro similique distinctio adipisci sint
            quisquam atque culpa eum ipsa assumenda, quidem, odit officiis
            expedita ea illum nisi libero! Modi voluptatem iste nulla tenetur
            expedita doloremque, impedit aliquam sed adipisci repellendus at.</p>
    </div>
  </section>

  <footer>
    <p>some cool footer 2017 &copy;</p>
  </footer>
</body>
</html>