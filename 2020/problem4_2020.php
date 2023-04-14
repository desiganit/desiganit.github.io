<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- change the image -->
    <link rel="icon" type="image/gif/png" href="img/z.png">

    <!-- Include Bootstrap CSS/JS/JQ -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@484&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500&family=EB+Garamond:wght@484&display=swap" rel="stylesheet">

    <!-- custom css -->
    <link rel="stylesheet" href="../css/style_1.css">
    <link rel="stylesheet" href="../css/style_2.css">
    
    <!-- meta tags -->

    <meta name="title" content="GATE-MA-2020 Problem 4">
    <meta name="description" content="Consider the following two statements: $\log(|z|)$ is harmonic on $\cbb\setminus \{0\}$ $\log(|z|)$ has a harmonic conjugate on $\cbb\setminus \{0\}$. Then">
    <meta name="keywords" content="harmonic, harmonic conjugate, complex analysis, GATE 2020 mathematics problem 4, GATE 2020 MA, gate mathematics, GATE MA, gate 2020, mathematics, Gate mathematics solution, ">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">    

    <!-- end of meta tags -->

    <!-- Mathjax Setting-->
    <script type="text/javascript">
    window.MathJax = {
        config: ["MMLorHTML.js"],
        jax: ["input/TeX", "input/MathML", "output/HTML-CSS", "output/NativeMML"],
        menuSettings: {
            texHints: true,
            semantics: false,
            zoom: 'NoZoom', // For zoom on double click "Double-Click",
            zscale: "200%",
        },
        extensions: ["tex2jax.js", "mml2jax.js", "MathMenu.js", "MathZoom.js"],
        TeX: {
            extensions: ["AMSmath.js", "AMSsymbols.js", "AMScd.js", "mathchoice.js",
                "action.js", "autobold.js", "begingroup.js", "unicode.js",
                "begingroup.js", "cancel.js", "color.js", "enclose.js",
                "extpfeil.js", "noErrors.js", "noUndefined.js", "autoload-all.js"
            ],
            Macros: {
                innerprod: ['{\\langle #1 \\rangle}', 1],
                paran: ['{\\left( #1\\right)}', 1],
                rbb: ['{\\mathbb{R}}'],
                cbb: ['{\\mathbb{C}}'],
                nbb: ['{\\mathbb{N}}'],
                bb: ['{\\mathbb{#1}}', 1],
                squarebracket: ['{\\left[ #1 \\right]}', 1],
            }
        },
        tex2jax: {
            inlineMath: [
                ['$', '$'],
                ["\\(", "\\)"]
            ],
            displayMath: [
                ['$$', '$$'],
                ["\\[", "\\]"]
            ],
            processEscapes: true
        }
    };
    </script>

    <!-- math -->
    <script type="text/javascript" src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS_HTML"></script>
    <link rel="stylesheet" href="latex2html5.min.css">
    <script type="text/javascript" src="..//scripts//latex2html5.min.js"></script>

    <!-- Title -->
    <title>Problem-4 MA-2020</title>

</head>

<body>
    <!-- The foolowing php code will produce the header file-->

    <?php $page_name = "gate" ?>

    <?php include 'head_foot_2020/header.php'; ?>

    <!-- End of the header code -->


     <div class="container">
        <div class="jumbotron jumbotron-math">

            <!-- Problem goes from here -->

            <h2 class="problem">Problem-4</h2>
            Consider the following two statements:
            <ol type="I">
              <li> $\log(|z|)$ is harmonic on $\mathbb{C}\setminus \{0\}.$ </li>
              <li>$\log(|z|)$ has a harmonic conjugate on $\mathbb{C}\setminus \{0\}$.</li>
            </ol>
            <ol type="A">
              <li> both I and II are true </li>
              <li> I is true but II is false </li>
              <li> I is false but II is true </li>
              <li> both I and II are false. </li>
            </ol>
            <!-- Problem ends at here -->
            <br>

            <!-- See answer; don't need to change this -->
            <button onclick="seeAnswer()" type="button" class="btn btn-outline-primary">
                Click to see the correct Answer
            </button>
            <br>    
            <br><br>

            <!-- YouTube video -->

            <!-- <iframe width="720" height="405" src="https://www.youtube.com/embed/BtF-3sseK3Q" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->

            <!-- YouTube video ends -->

            <!-- Answer begins from here don't need to change this-->
            <p style="color:red" id="answer"></p>
            <br>

            <!-- Definitions or hints -->

            <button type="button" class="collapsible-defintion-hints">Definition/Hints</button>
            <div class="content">
                
                <!--Definitions begin here-->

              <h3 class="definition"> Definitions </h3>
              <span style="color:blue">Harmonic functions: </span> A real valued function $u: D\to \rbb$ is said to be harmonic in a domain $D$ if
              <ol>
                <li>all the partial derivatives up to second order exists and continuous on $D$ and</li>
                <li> $u$ satisfies the Laplace equation, i.e.,
                       $$\nabla u (x,y) = \frac{\partial ^2u}{\partial x^2}(x,y) +\frac{\partial ^2u}{\partial y^2}(x,y) = 0 $$ at each point of $D$. </li>
              </ol>
              Since harmonic functions are very important and so let us state two very important theorems:
              <p class="theorem">
                <strong>Theorem 1: </strong>  If a fucntion $f(x+\iota y) = u(xy) + \iota v(x,y)$ is
                analytic in a domain $D$, then its component functions $u$ and $v$ are harmonic in $D.$
              </p>
              <span style="color:blue">Harmonic Conjugate: </span> Let $D$ be the domain
                and $u:D\to \rbb$ is harmonic. If there exists a harmonic function
                $V:D\to \rbb$ such that $f(x+\iota y) = u(x,y) + \iota v(x,y)$ is
                analytic in $D$, then $v$ is caleed the harmonic conjugate of $u.$

              <p class="theorem">
                <strong>Theorem 2: </strong> Let the domain $D$ be either the
                 whole plane $\mathbb{C}$ or some open disk (here I mean upto homeomorphism).
                 If $u:D \to \rbb$ is a harmonic function, then $u$ has harmonic
                conjugate in $D.$
              </p>

              <!--Hints begin from here-->

              <h3 class="hints"> Hints </h3>
              <ol>
                <li>Observe that $$\log|z| = \log\left(\sqrt{x^2+y^2}\right) = \dfrac{1}{2} \log(x^2+y^2). $$</li>
                <li>$\log|z|$, this is a very standard example to the last theorem, that if the domain $D $ is neither homeomorphic to $\cbb$ or an open disk, then the conclusion might not be true.</li>
              </ol>
            </div>

            <br>

            <!-- Solution begins from here -->
            <button type="button" class="collapsible-solution">Solution</button>
            <div class="content">

                Now let us see both of the two statements:

                    <!-- Statement I-->

                <h3 class="options">I. $\log(|z|)$ is harmonic on $\mathbb{C}\setminus \{0\}.$ </h3>

                  As per the hints, $ u=\dfrac{1}{2}\log(x^2+y^2) .$
                    \begin{eqnarray*}
                                  u & = & {\dfrac{1}{2}\log(x^2+y^2)}\\
                        \implies  u_x & = & \dfrac{1}{2}\paran{\dfrac{2x}{x^2+y^2}}\\
                        \implies  u_{xx} & = & \dfrac{x^2+y^2-x(2x)}{(x^2+y^2)^2}\\
                        \implies u_{xx} & = & \dfrac{-x^2+y^2}{x^2+y^2}
                    \end{eqnarray*}
                  Similarly,
                        \begin{eqnarray*}
                              u_y & = & \dfrac{1}{2}\paran{\dfrac{2y}{x^2+y^2}}\\
                              u_{yy} & = & \dfrac{x^2+y^2-y(2y)}{(x^2+y^2)^2}\\
                                     & = & \dfrac{x^2-y^2}{(x^2+y^2)^2}
                        \end{eqnarray*}
                        Now, observe that $$u_{xx}+u_{yy} = 0 ,$$
                    and hence $u$ is harmonic in $D.$ Therefore, (I) is true.

                <!-- Statement II -->
                
                <h3 class="options">II. $\log(|z|)$ has a harmonic conjugate on $\mathbb{C}\setminus \{0\}$. </h3>

                  Suppose a harmonic conjugate, say $v$, exists on $\cbb\setminus \{0\}$. Then, $$f:\cbb\setminus \{0\}\to\cbb, ~f(x+\iota y) = u(x,y) + \iota v(x,y) $$ is analytic and therefore,
                        \begin{equation}
                            \int_{|z|=1} f'(z)~\mathrm{d}z = 0. \tag{$\star$}
                        \end{equation}
                        $(\star)$ is true because of the fundamental theorem of calculus. Indeed, for every path $\gamma:[a,b]\to \cbb\setminus\{0\}$,
                        \begin{align*}
                            \int_{\gamma} f'(z)~\mathrm{d}z & = \int_a^b f'(\gamma(t))\gamma'(t)~\mathrm{d}t\\
                            & = \int_a^b (f\circ \gamma)'(t)~\mathrm{d}t\\
                            & = f(\gamma(b)) - f(\gamma(a))\\
                            & = 0 \qquad \text{if $\gamma$ is closed path.}
                        \end{align*}
                    But, on the other side
                        \begin{align*}
                            f'(x,y) & = \dfrac{\partial u}{\partial x} - \iota \frac{\partial u}{\partial y}\\
                                    & = \dfrac{x-\iota y}{x^2+y^2}\\
                                    & = \dfrac{1}{z}.
                        \end{align*}
                        Hence,
                        \begin{align*}
                            \int_{|z|=1} f'(z)~\mathrm{d}z & = \int_{|z|=1}\dfrac{\mathrm{d}z}{z} = 2\pi \iota,
                        \end{align*}
                        which is a contradiction and hence there will be no harmonic conjugate for the given function on $\cbb\setminus\{0\}$. Therefore, (II) is false.
                
            </div><br><br>
            <a href="problem3_2020.php"><div class="button prev">$\leftarrow$ Problem 3</div></a>
            <a href="problem5_2020.php"><div class="button next">Problem 5 $\rightarrow$</div></a>
        </div>
    </div>

<br><br><br><br>

<div class="container">
    <div class="jumbotron jumbotron-custom xyz">
        <a href="problem1_2020.php" style="text-decoration: none;"><button type="button" class="btn btn-light btn-circle btn-md">1</button> </a>
        <a href="problem2_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">2</button> </a>
        <a href="problem3_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">3</button> </a>
        <a href="problem4_2020.php" style="text-decoration: none";><button type="button" class="btn btn-primary btn-circle btn-md">4</button> </a>
        <a href="problem5_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">5</button> </a>
        <a href="problem6_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">6</button> </a>
        <a href="problem7_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">7</button> </a>
        <a href="problem8_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">8</button> </a>
        <a href="problem9_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">9</button> </a>
        <a href="problem10_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">10</button> </a>
        <a href="problem11_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">11</button> </a>
        <a href="problem12_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">12</button> </a>
        <a href="problem13_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">13</button> </a>
        <a href="problem14_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">14</button> </a>
        <a href="problem15_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">15</button> </a>
        <a href="problem16_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">16</button> </a>
        <a href="problem17_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">17</button> </a>
        <a href="problem18_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">18</button> </a>
        <a href="problem19_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">19</button> </a>
        <a href="problem20_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">20</button> </a>
        <a href="problem21_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">21</button> </a>
        <a href="problem22_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">22</button> </a>
        <a href="problem23_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">23</button> </a>
        <a href="problem24_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">24</button> </a>
        <a href="problem25_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">25</button> </a>
        <a href="problem26_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">26</button> </a>
        <a href="problem27_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">27</button> </a>
        <a href="problem28_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">28</button> </a>
        <a href="problem29_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">29</button> </a>
        <a href="problem30_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">30</button> </a>
        <a href="problem31_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">31</button> </a>
        <a href="problem32_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">32</button> </a>
        <a href="problem33_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">33</button> </a>
        <a href="problem34_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">34</button> </a>
        <a href="problem35_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">35</button> </a>
        <a href="problem36_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">36</button> </a>
        <a href="problem37_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">37</button> </a>
        <a href="problem38_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">38</button> </a>
        <a href="problem39_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">39</button> </a>
        <a href="problem40_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">40</button> </a>
        <a href="problem41_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">41</button> </a>
        <a href="problem42_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">42</button> </a>
        <a href="problem43_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">43</button> </a>
        <a href="problem44_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">44</button> </a>
        <a href="problem45_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">45</button> </a>
        <a href="problem46_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">46</button> </a>
        <a href="problem47_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">47</button> </a>
        <a href="problem48_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">48</button> </a>
        <a href="problem49_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">49</button> </a>
        <a href="problem50_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">50</button> </a>
        <a href="problem51_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">51</button> </a>
        <a href="problem52_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">52</button> </a>
        <a href="problem53_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">53</button> </a>
        <a href="problem54_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">54</button> </a>
        <a href="problem55_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">55</button> </a>
    </div>
</div>


    
<br><br><br><br><br>
   

    <!--- Footer -->
    <?php include '../head_foot/footer.php'; ?>
    <!--- End Footer -->


<!-- Some JS code -->

<script>
    // For collapsible hints
    var coll = document.getElementsByClassName("collapsible-defintion-hints");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }


    // for collapsible solution
    var coll = document.getElementsByClassName("collapsible-solution");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
    </script>

    <script>
      // for see answer 
    function seeAnswer() {
        document.getElementById("answer").innerHTML = "Correct option is (B)";
    }
    </script>



</body>

</html>