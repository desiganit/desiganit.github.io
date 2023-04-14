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

    <meta name="title" content="GATE-MA-2020 Problem 2">
    <meta name="description" content="Let $D=[-1,1]\times [-1,1]$. If the function $f:D\to \rbb$ is defined by $$ f(x,y) =     \begin{cases}
                                \dfrac{x^2-y^2}{(x^2+y^2)^2}, & (x,y)\neq(0,0)\\
                                          0,                              & (x,y)= (0,0)
                                \end{cases},
                              $$then ">
    <meta name="keywords" content="gate mathematics, GATE MA, gate 2020, multivariable calculus, mathematics, gate 2020 mathematics problem 2, Gate mathematics solution, ">
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
                nbb: ['{\\mathbb{N}}'],
                bb: ['{\\mathbb{#1}}', 1],
                squarebracket: ['{\\left[ #1 \\right]}', 1],
                delbydel: ['{\\dfrac{\\partial #1}{\\partial {#2}}}', 2],
                d: ['{ \\mathrm{#d}}'],
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
    <title>Problem-2 MA-2020</title>

</head>

<body>
    <!-- The foolowing php code will produce the header file-->

    <?php $page_name = "gate" ?>

    <?php include 'head_foot_2020/header.php'; ?>

    <!-- End of the header code -->



     <div class="container">
        <div class="jumbotron jumbotron-math">

            <!-- Problem goes from here -->

            <h2 class="problem">Problem-2</h2>
            Let $D=[-1,1]\times [-1,1]$. If the function $f:D\to \rbb$ is defined by
            $$
              f(x,y) =
              \begin{cases}
                \dfrac{x^2-y^2}{(x^2+y^2)^2}, & (x,y)\neq(0,0)\\
                          0,                              & (x,y)= (0,0)
                \end{cases},
              $$
            then
            <ol type="A">
              <li> $f$ is continuos at $(0,0).$ </li>
              <li> Both the first order partial derivatives of $f$ exists at $(0,0)$. </li>
              <li> $\displaystyle \iint \limits_{D}\left|f(x,y)\right|^{1/2}~\mathrm{d}x~\mathrm{d}y$ is finite. </li><br>
              <li> $\displaystyle \iint \limits_{D}\left|f(x,y)\right|~\mathrm{d}x~\mathrm{d}y$ is finite. </li>
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

                <!-- Definitions -->
                <h3 class="definition"> Definition </h3>
                <ol>
                    <li>
                          Continuous Functions: A function $f: U \subseteq \rbb^n\to \rbb$ is said to be continuous at
                          $x_0\in \rbb^n$ if for any sequence $\{x_n\}$ in $X$ if $x_n \longrightarrow x_0$, then
                          $f(x_n)\longrightarrow f(x_0).$ <br><br>
                          <p>
                            Let us <span style="color:red"> negate this statement </span>: we say that $f$ is not continuous at
                            $x_0$ if there exists a sequence $\{x_n\}$ in $X$ such that $x_n\longrightarrow x_0$ but $\{f(x_n)\}$
                            doesnot converge to $f(x_0).$ 
                          </p>
                      </li>
                </ol>

                <!-- Hints -->
                <h3 class="hints"> Hints </h3>
                <ol>
                    <li> For the option $(A)$ consider the sequence $\left\{\paran{\frac{1}{n},0}\right\}$. </li>
                    <li> Observe that $$ \frac{x^2-y^2}{(x^2+y^2)} = \frac{\partial }{\partial y}\paran{\frac{y}{x^2+y^2}}$$ and $$\int_{-1}^{1}\int_{-1}^{1} |f(x,y)|~\mathrm{d}x \mathrm{d}y= 8\int_0^1\int_0^x f(x,y)~\mathrm{d}x\mathrm{d}y.$$ </li>
                </ol>
            </div>
            <br>

            <!-- Solution begins from here -->
            <button type="button" class="collapsible-solution">Solution</button>
            <div class="content">

                <!-- Option A (if exists) -->
                <h3 class="options">(A)&nbsp $f$ is continuos at $(0,0).$</h3>
                We claim that the function is not continuous at $(0,0).$ For, consider the sequence $\left\{\paran{\frac{1}{n},0}\right\}$. Clearly $$\paran{\frac{1}{n},0}\longrightarrow (0,0),$$ where as
                \begin{align*}
                  f \paran{\frac{1}{n},0} & = \dfrac{1/n^2}{\paran{1/n^2}^2}\\
                  & = \dfrac{1}{1/n^2}\\
                  & = n^2,
                \end{align*}
                which diverges to $\infty.$ Thus, $f$ is not continuous at $(0,0).$

                <!-- Option B (if exists) -->
                <h3 class="options">(B) &nbsp Both the first order partial derivatives of $f$ exists at $(0,0)$.</h3>
                Let us compute each of the partial derivatives.
                    \begin{align*}
                        \left.\delbydel{f}{x}\right|_{(0,0)} & = \lim_{h\to 0}\dfrac{f(h,0)-f(0,0)}{h}\\
                        & = \lim_{h\to 0} \dfrac{h^2}{h^5}\\
                        & = \lim_{h\to 0} \dfrac{1}{h^3} \longrightarrow \infty.
                    \end{align*}
                    Similarly,
                    \begin{align*}
                        \left.\delbydel{f}{y}\right|_{(0,0)} & = \lim_{k\to 0}\dfrac{f(0,k)-f(0,0)}{k}\\
                        & = \lim_{k\to 0} \dfrac{-k^2}{k^5}\\
                        & = \lim_{k\to 0} \dfrac{1}{k^3} \longrightarrow -\infty.
                    \end{align*}
                Thus, none of the partial derivatives exist at $(0,0).$

                <!-- Option C (if exists) -->
                <h3 class="options">(C) &nbsp $\iint_{D}\left|f(x,y)\right|^{1/2}~\mathrm{d}x~\mathrm{d}y$ is finite. </h3>
                <p>Observe the hint and also note that $\left|f(x,y)\right|$ is symmetry in both $x$ and $y$ and hence we can reduce the integral
                   \begin{align*}
                     \int_{-1}^{1}\int_{-1}^{1} \left|\dfrac{x^2-y^2}{(x^2+y^2)^2}\right|\mathrm{d}x\mathrm{d}y & = 8 \int_0^1 \int_0^x \dfrac{x^2-y^2}{(x^2+y^2)^2}\mathrm{d}x \mathrm{d}y \qquad (\text{See Fig.1 below})\\
                     & = 8 \int_0^1 \int_0^x \delbydel{}{y}\paran{\dfrac{y}{x^2+y^2}}\mathrm{d}y\mathrm{d}x\\
                     & = 8 \int_0^1 \paran{\left.\dfrac{y}{x^2+y^2}\right|_0^x}\mathrm{d}x\\
                     & = 8 \int_0^1 \dfrac{1}{2x}\mathrm{d}x\\
                     & = 4 \ln(x)\Big|_0^1\\
                     &  \longrightarrow \infty
                   \end{align*}
                 </p>

                <!-- Option D (if exists) -->
                <h3 class="options">(D) &nbsp $ \iint_{D}\left|f(x,y)\right|~\mathrm{d}x~\mathrm{d}y$ is finite. </h3>
                <p>Observe the hint and also note that $\left|f(x,y)\right|$ is symmetry in both $x$ and $y$ and hence we can reduce the integral
                   \begin{align*}
                     \int_{-1}^{1}\int_{-1}^{1} \left|\dfrac{x^2-y^2}{(x^2+y^2)^2}\right|\mathrm{d}x\mathrm{d}y & = 8 \int_0^1 \int_0^x \dfrac{x^2-y^2}{(x^2+y^2)^2}\mathrm{d}x \mathrm{d}y \qquad (\text{See Fig.1 below})\\
                     & = 8 \int_0^1 \int_0^x \delbydel{}{y}\paran{\dfrac{y}{x^2+y^2}}\mathrm{d}y\mathrm{d}x\\
                     & = 8 \int_0^1 \paran{\left.\dfrac{y}{x^2+y^2}\right|_0^x}\mathrm{d}x\\
                     & = 8 \int_0^1 \dfrac{1}{2x}\mathrm{d}x\\
                     & = 4 \ln(x)\Big|_0^1\\
                     &  \longrightarrow \infty
                   \end{align*}
                 </p>
                   <div class="text-center">
                     <figure>
                       <img src="Images_2020/Problem2_2020.svg" class="rounded" alt="Integral Image">
                       <figcaption>Fig.1 - Double Integral </figcaption>
                     </figure>
                  </div>
            </div>
            <br><br>
            <a href="problem1_2020.php"><div class="button prev">$\leftarrow$ Problem 1</div></a>
            <a href="problem3_2020.php"><div class="button next">Problem 3 $\rightarrow$</div></a>
        </div>
    </div>

<br><br><br><br>

<div class="container">
    <div class="jumbotron jumbotron-custom xyz">
        <a href="problem1_2020.php" style="text-decoration: none;"><button type="button" class="btn btn-light btn-circle btn-md">1</button> </a>
        <a href="problem2_2020.php" style="text-decoration: none";><button type="button" class="btn btn-primary btn-circle btn-md">2</button> </a>
        <a href="problem3_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">3</button> </a>
        <a href="problem4_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">4</button> </a>
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
        document.getElementById("answer").innerHTML = "Correct option is (C)";
    }
    </script>



</body>

</html>