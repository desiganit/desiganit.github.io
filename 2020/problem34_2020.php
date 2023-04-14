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
    
    <meta name="title" content="Problem-34 MA-2020">
    <meta name="description" content="let $y_n$ be the solution of the differential equation $$xy''+(1-x)y'+ny=0$$">
    <meta name="keywords" content="gate mathematics, Gate MA 2020, Gate MA, problem 34, solution of problem 34, gate ma 2020 problem 34 solution, let $y_n$ be the solution of the differential equation $$xy''+(1-x)y'+ny=0$$">
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
                zbb: ['{\\mathbb{Z}}'],
                nbb: ['{\\mathbb{N}}'],
                bb: ['{\\mathbb{#1}}', 1],
                squarebracket: ['{\\left[ #1 \\right]}', 1],
                delbydel: ['{\\dfrac{\\partial #1}{\\partial {#2}}}', 2],
                d: ['{ \\mathrm{#d}}'],
                norm: ['{|| #1 ||}', 1]
                
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
    <title>Problem-34 MA-2020</title>

</head>

<body>
   <!-- The foolowing php code will produce the header file-->

    <?php $page_name = "gate" ?>

    <?php include 'head_foot_2020/header.phpp'; ?>

    <!-- End of the header code -->


     <div class="container">
        <div class="jumbotron jumbotron-math">

            <!-- Problem goes from here -->

            <h2 class="problem">Problem-34</h2>
            For $n\in \mathbb{N}\bigcup \{0\}$, let $y_n$ be the solution of the differential equation $$xy''+(1-x)y'+ny=0$$
            satisfying $y_n(0)=1$. For which of the following functions $\omega(x)$, the integral

            $$\int_{0}^{\infty}y_p(x)y_q(x)\omega(x)\,{\rm d}x, \,(p\neq q)$$
            is equal to zero?
            <br><br>
            <ol type="A">
                <li>$e^{-x^2}$ </li>
                <br>
                <li>$e^{-x}$</li>
                <br>
                <li>$xe^{-x^2}$</li>
                <br>
                <li>$xe^{-x}$.</li>
            </ol>
        

            <!-- Problem ends at here -->
            <br><br>

            <!-- See answer; don't need to change this -->
            <button onclick="seeAnswer()" type="button" class="btn btn-outline-primary">
                Click to see the correct Answer
            </button>
            
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
                    <li> </li> 
                    <li> </li> 
                    <li> </li>
                </ol>

                <!-- Hints -->
                <h3 class="hints"> Hints </h3>
                <ol>
                    <li>  </li>
                    <li>  </li>
                </ol>
            </div>
            <br>

            <!-- Solution begins from here -->
            <button type="button" class="collapsible-solution">Solution</button>
            <div class="content">
              
                The given differential equation is
                $$xy''+(1-x)y'+ny=0.$$
                We see that this is not in standard form, to write it in standard form we multiply by $r(x)$ and solve for $r(x)$.
                $$xr(x)y''+(1-x)r(x)y'+nr(x)=0.$$
                Now, comparing with , we get
                $$p(x)=xr(x),\,\, p'(x)=(1-x)r(x).$$
                Differentiating firts equation we get
                $$p'(x)=r(x)+xr'(x).$$
                Thus
                \begin{align*}
                &r(x)\,+\,x\,r'(x)\,\,=(1-x)\,r(x)\\
                \implies &x\,r'(x)+x\,r(x)=0\\
                \implies &r'(x)\,\,+\,\,r(x)\,\,\,=0.
                \end{align*}
                Whose solution is $r(x)=e^{-x}\implies p(x)=xe^{-x}.$\\
                Thus, the given differential equation in its standard form is
                $$\frac{{\rm d}}{{\rm d}x}\left(xe^{-x}\frac{{\rm d} y}{{\rm d}x}\right)+ne^{-x} y=0.$$
                Now, let $y_p$ and $y_q$ $(p\neq q)$ be two solutions of the above equation. Then we have
                \begin{equation}\label{20q3402}\tag{34.1}
                \left(xe^{-x}y_p'(x)\right)'+pe^{-x}y_p(x)=0.
                \end{equation}
                and
                \begin{equation}\label{20q3403}\tag{34.2}
                \left(xe^{-x}y_q'(x)\right)'+qe^{-x}y_q(x)=0.
                \end{equation}
                \begin{align*}
                (34.1) \times y_q(x):\, \, &\left(xe^{-x}y_p'(x)\right)'y_q+pe^{-x}y_p(x)y_q(x)=0\\
                (34.2) \times y_p(x):\, \, &\left(xe^{-x}y_q'(x)\right)'y_p+qe^{-x}y_p(x)y_q(x)=0\\
                -----------------&-----------------------------------\\
                \text{Subtracting } & \, \left(xe^{-x}y_p'(x)\right)'y_q(x)-\left(xe^{-x}y_q'(x)\right)'y_p(x)+(p-q)e^{-x}y_p(x)y_q(x)=0.
                \end{align*}

                Which can be written as
                \begin{align*}
                (p-q)\,e^{-x}y_p\,y_q\,+&\left( (x\,e^{-x})'\,y_p'\,+\, (x\,e^{-x})\,y_p''\right)\,y_q\\
                &-\left( (x\,e^{-x})'\,y_q'\,+\,(x\,e^{-x})\,y_q''\right)\,y_p=0\\
                \implies (p-q)\,e^{-x}y_p\,y_q\,+&\,(x\,e^{-x})'\,y_p'\,y_q\,+\, (x\,e^{-x})\,y_p''\,y_q\\
                &-(x\,e^{-x})'\,y_q'\,y_p\,+\,(x\,e^{-x})\,y_q''\,y_p=0\\
                \implies (p-q)\,e^{-x}y_p\,y_q\,+&\,(x\,e^{-x})'(y_p'\,y_q-y_p\,y_q')\\
                &+\,(x\,e^{-x})(y_p''\,y_q-y_q''\,y_p)=0\\
                \implies (p-q)\,e^{-x}y_p\,y_q\,+&\, \left( (x\,e^{-x})\, (y_p'\,y_q-y_p\,y_q')\right)'=0.
                \end{align*}
                Integrating both sides from $0$ to $\infty$, we get
                \begin{align*}
                (p-q)\int_{0}^{\infty} \,e^{-x}y_p\,y_q+&\, \int_{0}^{\infty} \, \left( (x\,e^{-x})\, (y_p'\,y_q-y_p\,y_q')\right)'=0\\
                (p-q)\int_{0}^{\infty} \,e^{-x}y_p\,y_q+&\left[(x\,e^{-x})\, (y_p'\,y_q-y_p\,y_q')\right]_{0}^{\infty}=0.
                \end{align*}
                Since, $\,\,t(x)\,e^{-x}\to 0$ as $x\to \infty$, for any polynomial $t(x)$, we have
                \begin{align*}
                (p-q)\int_{0}^{\infty} \,e^{-x}y_p\,y_q+\,(0-0)=0.
                \end{align*}
                That is, $$\int_{0}^{\infty} y_p\,y_q\,e^{-x}=0.$$

             

            </div><br><br>
            <a href="problem33_2020.php"><div class="button prev">$\leftarrow$ Problem 33</div></a>
            <a href="problem35_2020.php"><div class="button next">Problem 35 $\rightarrow$</div></a>
        </div>
    </div>

<br><br><br><br>

<div class="container">
    <div class="jumbotron jumbotron-custom xyz">
        <a href="problem1_2020.php" style="text-decoration: none;"><button type="button" class="btn btn-light btn-circle btn-md">1</button> </a>
        <a href="problem2_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">2</button> </a>
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
        <a href="problem34_2020.php" style="text-decoration: none";><button type="button" class="btn btn-primary btn-circle btn-md">34</button> </a>
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
    <?php include 'head_foot_2020/footer.php'; ?>
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
        document.getElementById("answer").innerHTML = "Correct option is (D)";
    }
    </script>



</body>

</html>