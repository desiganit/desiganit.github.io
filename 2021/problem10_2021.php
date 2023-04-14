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

    <meta name="title" content="GATE-MA-2021 Problem 10">
    <meta name="description" content="Let $f:\left(\frac{-\pi}{2}, \frac{\pi}{2}\right) \rightarrow \mathbb{R}$ be given by $f(x)=\frac{\pi}{2}+x-\tan ^{-1} x .$ Consider the following statements:">
    <meta name="keywords" content="gate mathematics, GATE MA, gate 2021, real analysis, mathematics, fixed point, gate mathematics problem 10, Lipschitz continuity, continuity, Gate mathematics solution, ">
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=TeX-AMS-MML_HTMLorMML.js"></script>
    <!-- <script type="text/javascript" src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS_HTML"></script> -->
    <!-- <link rel="stylesheet" href="latex2html5.min.css"> -->
    <!-- <script type="text/javascript" src="..//scripts//latex2html5.min.js"></script> -->

    <!-- Title -->
   <title>Problem-10 MA-2021</title>

</head>

<body>
    <!-- The foolowing php code will produce the header file-->

    <?php $page_name = "gate" ?>

    <?php include 'head_foot_2021/header.php'; ?>

    <!-- End of the header code -->



     <div class="container">
        <div class="jumbotron jumbotron-math">

            <!-- Problem goes from here -->

            <h2 class="problem">Problem-10</h2>
               Let $f:\left(\frac{-\pi}{2}, \frac{\pi}{2}\right) \rightarrow \mathbb{R}$ be given by $f(x)=\frac{\pi}{2}+x-\tan ^{-1} x .$ Consider the following statements:<br><br>
               P: $|f(x)-f(y)| < |x-y|$ for all $x, y \in\left(\frac{-\pi}{2}, \frac{\pi}{2}\right)$.<br><br>
               Q: $f$ has a fixed point.<br><br
               Then
            <br><br>
            <ol type="A">
                <li>both P and Q are TRUE</li> <br>
                <li>P is TRUE and Q is FALSE</li> <br>
                <li>P is FALSE and Q is TRUE</li> <br> 
                <li>both P and Q are FALSE</li>
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

            
            <!-- YouTube video ends -->

            <!-- Answer begins from here don't need to change this-->
            <p style="color:red" id="answer"></p>
            <br>

            <!-- Definitions or hints -->

            <button type="button" class="collapsible-defintion-hints">Definition/Hints</button>
            <div class="content">

                <!-- Definitions -->
                <h3 class="definition"> Definition </h3> 
                        <p>
                            Suppose $f:X\to X$ be a mapping. Then a point $a\in X$ ia called a <a href="https://en.wikipedia.org/wiki/Fixed_point_(mathematics)">fixed point</a> of $f$ if $f(a)=a$.  
                        </p><br>

                        <p>
                            Let $(X,d)$ be a metric  space  and $f:X\to X$. Then $f$ is a <a href="https://en.wikipedia.org/wiki/Contraction_mapping">contraction  mapping</a> (with modulus $\beta$) if for some $\beta\in (0,1)$, $$d(f(x),f(y))\leq \beta d(x,y), \text{ for all }x,y\in X.$$
                        </p><br>

                <h3 class="definition"> Theorem </h3>

                  <p class="theorem">
                       <strong>Theorem 1:-</strong> Suppose $f:(a,b)\to \mathbb{R}$ be a differentiable function with $f'(x)\leq M$ for all $x\in (a,b)$. Then $f$ is a Lipschitz function with Lipschitz constant $M$.   
                  </p><br>
                  
                  <p class="theorem">
                       <strong>Theorem 2 <a href="https://en.wikipedia.org/wiki/Banach_fixed-point_theorem">(Banach Fixed Point Theorem)</a>:- </strong> If $(X,d)$ is  a  complete  metric  space (i.e., every Cauchy sequence in this space is convergent) and $f:X\to X$ is  a  contraction  mapping, then $f$ has exactly one fixed point $a\in X$.
                  </p><br>

                  <p class="theorem">
                       <strong>Theorem 3:- </strong> Let $(X, d)$ be a metric space. If $A \subseteq X$ is a complete subspace, then $A$ is closed. In particular open intervals are not complete in $\mathbb{R}$.
                  </p>

                <!-- Hints -->
                <h3 class="hints"> Hints </h3>
                <ul>
                    <li>
                        For first statement apply Theorem 1.
                    </li>
                    <br>
                    <li>
                        For second statement see what happen if $f$ has a fixed point.
                    </li>
                </ul>

            </div>
            <br>

            <!-- Solution begins from here -->
            <button type="button" class="collapsible-solution">Solution</button>
            
            <div class="content">

                Lets us check both the statements separately:-

                    <!-- Statement P-->

                <h3 class="options">P: $|f(x)-f(y)| < |x-y|$ for all $x, y \in\left(\frac{-\pi}{2}, \frac{\pi}{2}\right)$</h3>.<br>

                First note that given $f$ is differentiable and $f'(x)=1-\frac{1}{1+x^2}=\frac{x^2}{1+x^2}< 1$, for all $x\in \left(\frac{-\pi}{2}, \frac{\pi}{2}\right)$.<br><br>

                Then by Theorem 1, we have $f$ is a Lipschitz function with Lipschitz constant 1 i.e, $|f(x)-f(y)| < |x-y|$ for all $x, y \in\left(\frac{-\pi}{2}, \frac{\pi}{2}\right)$.<br>
                Hence the statement is <span style="color: green">TRUE</span>. 
                <br><br>


                <!-- Statement Q-->

                <h3 class="options">Q: $f$ has a fixed point</h3>.<br>


                Suppose $f$ has a fixed point $a\in \left(\frac{-\pi}{2}, \frac{\pi}{2}\right)$.<br>
                Then $f(a)=a$ implies 
                \begin{align*}
                   &\frac{\pi}{2}+a-\tan ^{-1} a=a\\
                   \Rightarrow &\ \tan ^{-1} a=\frac{\pi}{2}\\
                   \Rightarrow &\ a= \tan \frac{\pi}{2}=\infty,
                \end{align*}
                which is a contradiction. Thus $f$ can't have a fixed point.<br>
                Hence the statement is <span style="color: red">FALSE</span>.<br><br>

                Here one thing to note that although $f$ is a contraction mapping (as $f'$ is actually bounded by $\frac{\pi^2}{4+\pi^2}< 1$ (check)), it has no fixed point because $\left(-\frac{\pi}{2},\frac{\pi}{2}\right)$ is not complete (by Theorem 3). That's why we can't use Theorem 2.<br><br> 

                Thus the correct option is <span style="color:blue">(B)</span>.
                
            </div> <!-- content -->
            
            <br><br>

            <a href="problem9_2021.php"><div class="button prev">$\leftarrow$ Problem 9</div></a>
            <a href="problem11_2021.php"><div class="button next">Problem 11 $\rightarrow$</div></a>
        </div>
    </div>


<br><br><br>
<!-- End comments -->

<div class="container">
    <div class="jumbotron jumbotron-custom xyz">
        <a href="problem1_2021.php" style="text-decoration: none;"><button type="button" class="btn btn-light btn-circle btn-md">1</button> </a>
        <a href="problem2_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">2</button> </a>
        <a href="problem3_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">3</button> </a>
        <a href="problem4_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">4</button> </a>
        <a href="problem5_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">5</button> </a>
        <a href="problem6_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">6</button> </a>
        <a href="problem7_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">7</button> </a>
        <a href="problem8_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">8</button> </a>
        <a href="problem9_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">9</button> </a>
        <a href="problem10_2021.php" style="text-decoration: none";><button type="button" class="btn btn-primary btn-circle btn-md">10</button> </a>
        <a href="problem11_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">11</button> </a>
        <a href="problem12_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">12</button> </a>
        <a href="problem13_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">13</button> </a>
        <a href="problem14_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">14</button> </a>
        <a href="problem15_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">15</button> </a>
        <a href="problem16_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">16</button> </a>
        <a href="problem17_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">17</button> </a>
        <a href="problem18_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">18</button> </a>
        <a href="problem19_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">19</button> </a>
        <a href="problem20_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">20</button> </a>
        <a href="problem21_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">21</button> </a>
        <a href="problem22_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">22</button> </a>
        <a href="problem23_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">23</button> </a>
        <a href="problem24_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">24</button> </a>
        <a href="problem25_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">25</button> </a>
        <a href="problem26_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">26</button> </a>
        <a href="problem27_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">27</button> </a>
        <a href="problem28_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">28</button> </a>
        <a href="problem29_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">29</button> </a>
        <a href="problem30_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">30</button> </a>
        <a href="problem31_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">31</button> </a>
        <a href="problem32_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">32</button> </a>
        <a href="problem33_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">33</button> </a>
        <a href="problem34_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">34</button> </a>
        <a href="problem35_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">35</button> </a>
        <a href="problem36_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">36</button> </a>
        <a href="problem37_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">37</button> </a>
        <a href="problem38_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">38</button> </a>
        <a href="problem39_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">39</button> </a>
        <a href="problem40_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">40</button> </a>
        <a href="problem41_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">41</button> </a>
        <a href="problem42_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">42</button> </a>
        <a href="problem43_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">43</button> </a>
        <a href="problem44_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">44</button> </a>
        <a href="problem45_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">45</button> </a>
        <a href="problem46_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">46</button> </a>
        <a href="problem47_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">47</button> </a>
        <a href="problem48_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">48</button> </a>
        <a href="problem49_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">49</button> </a>
        <a href="problem50_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">50</button> </a>
        <a href="problem51_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">51</button> </a>
        <a href="problem52_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">52</button> </a>
        <a href="problem53_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">53</button> </a>
        <a href="problem54_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">54</button> </a>
        <a href="problem55_2021.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">55</button> </a>
    </div> <!-- jumbotron -->
</div><!-- container-->

    
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