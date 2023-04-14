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

    <meta name="title" content="GATE-MA-2020 Problem 12">
    <meta name="description" content="Suppose that $M$ is a $5\times 5$ matrix with real entries and $p(x)=\det(xI-M).$ Then">
    <meta name="keywords" content="matrix, rank, determinant, eigenvalues, eigenvectors, GATE 2020 mathematics problem 12, GATE 2020 MA, gate mathematics, GATE MA, gate 2020, mathematics, Gate mathematics solution, ">
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
    <title>Problem-12 MA-2020</title>

</head>

<body>
    <!-- The foolowing php code will produce the header file-->

    <?php $page_name = "gate" ?>

    <?php include 'head_foot_2020/header.php'; ?>

    <!-- End of the header code -->


     <div class="container">
        <div class="jumbotron jumbotron-math">

            <!-- Problem goes from here -->

            <h2 class="problem">Problem-12</h2>
            Suppose that $M$ is a $5\times 5$ matrix with real entries and $p(x)=det(xI-M).$ Then
            <br><br>
            <ol type="A">
                <li>$p(0)=det(M)$</li> <br>
                <li>every eigenvalue of $M$ is real if $p(1)+p(2)=0=p(2)+p(3)$</li> <br>
                <li>$M^{-1}$ is necessarily a polynomial in $M$ of degree $4$ if $M$ is invertible</li> <br>
                <li>$M$ is not invertible if $M^2-2M=0$</li>
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
        
                <!-- Option A (if exists) -->
                <h3 class="options">(A) $p(0)=det(M)$</h3>
                 By definition $p(0)=det(-M)=(-1)^5det(M)=-det(M).$ Thus unless $det(M)=0,$ $p(0)\neq det(M).$ So this is <strong>false</strong>.
                <br><br>

                <!-- Option B (if exists) -->
                <h3 class="options">(B) every eigenvalue of $M$ is real if $p(1)+p(2)=0=p(2)+p(3)$</h3>
                 From given statement we have $-p(1)=p(2)=-p(3).$ Thus if $p(2)=0,$ then $p$ has three real roots $1,2,3.$ If $p(2)\neq 0,$ then $p(1)p(2)<0$ and $p(2)p(3)<0$ and as $p$ is a real polynomial (continuity of $p$ is enough), so $p$ has real roots in between $1\ \&\ 2$ and $2\ \&\ 3$.<br>
                 But as degree of $p$ is $5$, odd, so number of real root of $p$ atleast $3$. Hence in either cases we can only say $p$ has atleast three real roots i.e., $M$ has atleast three real eigenvalues but not every eigenvalue is real.<br>
                 For example if $p(x)=(x^2+1)(x-1)(x-2)(x-3)$ corresponding to 
                 $$ M=\paran{\begin{array}{ccccc}
                       0 &1 &0 &0 &0\\
                       -1 &0 &0 &0 &0\\
                       0 &0 &1 &0 &0\\
                       0 &0 &0 &2 &0\\
                       0 &0 &0 &0 &3
                      \end{array}},$$ then $p$ satisfying the given condition but $M$ has three real eigenvalues $1,2,3$ and two complex eigenvalues $\iota,-\iota$. So this is <strong>false</strong>. 
                 <br><br>

                <!-- Option C (if exists) -->
                <h3 class="options">(C) $M^{-1}$ is necessarily a polynomial in $M$ of degree $4$ if $M$ is invertible</h3>
                 If $M$ is invertible then det$(p)\neq 0$. So $0$ is not a root of $p$ i.e., $p$ has non zero constant term.<br>
                 But as $p(M)=0$, so we can write this equation as $Mp_1(M)=I$ for some polynomial $p_1$ of degree 4. Thus by uniqueness of $M^{-1},$ we will get $M^{-1}$ is necessarily $p_1(M)$, a polynomial in $M$ of degree $4.$ So this is <strong>true</strong>
                <br><br>

                <!-- Option D (if exists) -->
                <h3 class="options">(D) $M$ is not invertible if $M^2-2M=0$</h3>
                 If $M=2I$, then $M$ is invertible and satisfy $M^2-2M=0.$ Because $M^2-2M=0$ implies $M$ is not invertible only if atleast one eigenvalue of $M$ is $0$.<br>
                 But it is possible that all eigenvalue of $M$ equals $2$, then still the relation holds and $M$ is invertible (that's why we choose $M=2I$). So this is <strong>false</strong>
            </div><br><br>
            <a href="problem11_2020.php"><div class="button prev">$\leftarrow$ Problem 11</div></a>
            <a href="problem13_2020.php"><div class="button next">Problem 13 $\rightarrow$</div></a>
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
        <a href="problem12_2020.php" style="text-decoration: none";><button type="button" class="btn btn-primary btn-circle btn-md">12</button> </a>
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