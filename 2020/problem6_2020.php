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

    <meta name="title" content="GATE-MA-2020 Problem 6">
    <meta name="description" content="Let $f(z)=e^{\frac{1}{z}},\,\,z\in\mathbb{C}\setminus\{0\}$ and let, for $n\in\mathbb{N}$, $${R}_n=\left\{x+iy\in \mathbb{C}:\,\, |x|<\frac{1}{n},\,|y|<\frac{1}{n}\right\}\setminus\{0\}.$$ If for a subset $S$ of $\mathbb{C}$, $\overline{S}$ denotes the closure of $S$ in $\mathbb{C}$, then">
    <meta name="keywords" content="closure, intersection, complex analysis,essential singularity, pole, holomorphic, GATE 2020 mathematics problem 6, GATE 2020 MA, gate mathematics, GATE MA, gate 2020, mathematics, Gate mathematics solution, ">
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
                rbb: ['{\\mathbb{R}}'],
                cbb: ['{\\mathbb{C}}'],
                zbb: ['{\\mathbb{Z}}'],
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
    <title>Problem-6 MA-2020 </title>

</head>

<body>
    <!-- The foolowing php code will produce the header file-->

    <?php $page_name = "gate" ?>

    <?php include 'head_foot_2020/header.php'; ?>

    <!-- End of the header code -->


     <div class="container">
        <div class="jumbotron jumbotron-math">

            <!-- Problem goes from here -->
          <h2 class="problem">Problem-6</h2>
            Let $f(z)=e^{\frac{1}{z}},\,\,z\in\mathbb{C}\setminus\{0\}$ and let, for $n\in\mathbb{N}$,
            $${R}_n=\left\{z=x+iy\in \mathbb{C}:\,\, |x|<\frac {1}{n},\,|y|<\frac{1}{n}\right\}\setminus\{0\}.$$ If for a subset $S$ of $\mathbb{C}$, $\overline{S}$ denotes the closure of $S$ in $\mathbb{C}$, then 
            <ol type="A">
                <li> $\overline{f(R_{n+1})}\neq f(R_n)$</li><br>
                <li>$\overline{f(R_n)}\setminus f(R_{n+1})=f(R_n\setminus R_{n+1})$</li><br>
                <li>$\overline{f\left(\bigcap_{n=1}^{\infty}R_n\right)}=\bigcap_{n=1}^{\infty}\overline{f(R_n)}$</li><br>
                <li> $\overline{f(R_n)}=\overline{f(R_{n+1})}$</li><br>
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
                <h3 class="definition"> Definitions </h3>
                  <span style="color:blue;">Isolated Singularity:</span> A point $z_0$ is called an <em>isolated singularity</em> of $f(z)$ if $f(z)$ is analytic in some punctured disk $\{z\in \mathbb{C}:0 < |z-z_0| < r\}$ centered at $z_0$. For example, the function $1/z$ has an isolated singularity at $z=0$, while $1/\sin z$ has isolated singularities at each of the points $z=n\pi,~n\in \mathbb{Z}$.

                    There are three kind of isolated singularities at $z_0$ according to the expansion of Laurent series about the point $z_0$,
                    $$
                    f(z) = \sum_{n=-\infty}^{\infty}a_n(z-z_0)^n.
                    $$


                    <ul>
                        <li>
                            <span style="color:blue;">Removable singularity:</span> The isolated singularity of $f(z)$ at $z_0$ is defined to be <em>removable singularity</em> if $a_n=0$ for all $n<0$.
                        </li>
                        <li>
                            <span style="color:blue;">Pole:</span> The isolated singularity of $f(z)$ at $z_0$ is defined to be <em>pole</em> if there exists $N>0$ such that $a_{-N}\neq 0$ but $a_n=0$ for all $n<-N$.
                        </li>
                         <li>
                            <span style="color:blue;">Essential singularity:</span> The isolated singularity of $f(z)$ at $z_0$ is defined to be <em>essential singularity</em> if $a_n\neq 0$ for infinitely many $n<0$. 
                        </li>
                    </ul>
                    Here we are stating three important theorems that talk about the range of an analytic function. 
                    <p class="theorem">
                        <strong>Theorem 1 (Little Picard's Theorem):</strong> Let $f:\mathbb{C}\to \mathbb{C}$ be a non-constant entire function. Then $f\left(\mathbb{C}\right)$ is either the whole plane $\mathbb{C}$ or $\mathbb{C}$ minus a point. In the other words, if an entire function $f$ omits two values, then $f$ is constant. 
                    </p><br>

                    <p class="theorem">
                        <strong>Theorem 2 (Great Picard's Theorem):</strong> Let $f:U\subseteq \mathbb{C}\to \mathbb{C}$ be an analytic function. Suppose that it has an essential singularity at $z=z_0$. Then in each neighborhood of $z_0$, $f$  takes all complex numbers with one possible exception, an infinite number of times.
                    </p><br>

                    <p class="theorem">
                        <strong>Theorem 3 (Casorati-Weierstrass Theorem:)</strong> Let  $U$ be any open subset of $\mathbb{C} $ containing a number $z_0$ and $f$ be a function analytic on $U\setminus \{z_0\}$ with $z_0$ as essential singularity. Then for any neighborhood $V$ of $z_0$ contained in $U$, $f\left(V\setminus\{z_0\}\right)$ is dense in $\mathbb{C}$.
                    </p>
                <!-- Hints -->
                <h3 class="hints"> Hints </h3>
                 <ol>
                    <li>
                        Use the <em>Great Picard's Theorem</em> to conclude that for $n\in \mathbb{N}$
                        $$f\left(R_{n}\right) = \mathbb{C}~\text{or}~\mathbb{C}\setminus\{a\},~a\in \mathbb{C}$$
                    </li>
                    <li>
                        Observe that 
                        $$ \bigcap_{n=1}^{\infty} R_n = \{0\} .$$
                    </li>
                </ol>
            </div>
            <br>

            <!-- Solution begins from here -->
            <button type="button" class="collapsible-solution">Solution</button>
            <div class="content">

                <h3 class="options">(A) &nbsp $\overline{f(R_{n+1})}\neq f(R_n)$</h3>
                    <p>
                        $R_{n+1}$ and $R_n$ both are punctured neighborhood's of $0$. Thus, by Great Picard's theorem we have
                        $$f(R_{n+1})=\mathbb{C}\text{ or } \mathbb{C}\setminus \{a\}, a\in \mathbb{C}$$
                        and
                        $$f(R_{n})=\mathbb{C}\text{ or } \mathbb{C}\setminus \{a\}, a\in \mathbb{C}.$$
                        As $e^{\frac{1}{z}}$ does not take the value $0$, $f(R_{n}) \text{ must be } \mathbb{C}\setminus \{0\}.$
                        The same is also true for $f(R_{n+1})$ that is, $f(R_{n+1})=\mathbb{C}\setminus \{0\}$. Thus
                        $$\overline{f(R_{n+1})}=\mathbb{C}\neq \mathbb{C}\setminus \{0\}=f(R_n).$$
                        That is, $(A)$ is TRUE.
                    </p>
                    
                <h3 class="options">(B) $\overline{f(R_n)}\setminus f(R_{n+1})=f(R_n\setminus R_{n+1})$</h3>
                    <p>
                        We have
                        $$\overline{f(R_n)}\setminus f(R_{n+1})=\mathbb{C}\setminus\{\mathbb{C}\setminus\{0\}\}=\{0\}.$$
                        On the other hand since $e^{\frac{1}{z}}$ does not take the the value $0$, $f(R_n\setminus R_{n+1})$ can not contain $0$. Thus $(B)$ is FALSE.
                    </p>
                    
                <h3 class="options">(C) $\overline{f(\bigcap_{n=1}^{\infty}R_n)}=\bigcap_{n=1}^{\infty}\overline{f(R_n)}$ </h3>
                    <p> 
                        We have $\bigcap_{n=1}^{\infty}R_n=0.$ Thus, $f(\bigcap_{n=1}^{\infty}R_n)$ is not defined, that is, $f(\bigcap_{n=1}^{\infty}R_n)=\phi$, the empty set. This implies
                        $$\overline{f\left(\bigcap_{n=1}^{\infty}R_n\right)}=\overline{\phi}=\phi.$$
                        But $\overline{f(R_n)}=\mathbb{C}\implies \bigcap_{n=1}^{\infty}\overline{f(R_n)}=\mathbb{C}.$
                        Thus, $(C)$ is FALSE.
                    </p>
                <h3 class="options">(D) $\overline{f(R_n)}=\overline{f(R_{n+1})}$ </h3>
                    <p>
                        $\overline{f(R_n)}=\mathbb{C}=\overline{f(R_{n+1})}$. So $(D)$ is TRUE.
                    </p>
        </div><br><br>
            <a href="problem5_2020.php"><div class="button prev">$\leftarrow$ Problem 5</div></a>
            <a href="problem7_2020.php"><div class="button next">Problem 7 $\rightarrow$</div></a>
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
        <a href="problem6_2020.php" style="text-decoration: none";><button type="button" class="btn btn-primary btn-circle btn-md">6</button> </a>
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
        document.getElementById("answer").innerHTML = "Correct option is (A,D)";
    }
    </script>



</body>

</html>