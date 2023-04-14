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
    <link rel="stylesheet" href="css/style_1.css">
    <link rel="stylesheet" href="css/style_2.css">

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
                zbb: ['{\\mathbb{Z}}'],
                bb: ['{\\mathbb{#1}}', 1],
                cbb: ['{\\mathbb{C}}'],
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

    <!-- Header and footer -->

    <!-- <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous">
    </script>

    <script> 
    $(function(){
      $("#header").load("header.php"); 
      $("#footer").load("footer.php"); 
    });
    </script>  -->

    <!-- math -->
    <script type="text/javascript" src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS_HTML"></script>
    <link rel="stylesheet" href="latex2html5.min.css">
    <script type="text/javascript" src="..//scripts//latex2html5.min.js"></script>

    <!-- Title -->
    <title>GATE</title>

    

    <style>
        .accordion__item {
            padding: 20px;
            margin-bottom: 20px;
            border: 1px solid #f2f2f2;
            border-radius: 4px;
            box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.06);
        }
        
        .accordion__body {
            display: none;
            padding-top: 10px;
        }

        .accordion__body p {
            margin-bottom: 0;
        }

        .accordion__title {
            font-size: 18px;
            cursor: pointer;
            margin-bottom: 0;
            position: relative;
        }

        .accordion__title:after {
            content: "";
            width: 20px;
            height: 20px;
            position: absolute;
            right: 0;
            top: 0;
            background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABlUlEQVRIS72V6zEEQRSFv81ABogAESADIiADRIAIEAEiQASIABmQgQyor+rerZ7enp71Y92qqZrpxznnPmfGim22YnyWITgGdoHteNT0Hs8j8NQT2SM4AK6AjQkvP4EzQLIFGyO4Bk7i9Bfg90uodllv9oBTYD3OeUaigbUISnAv+N0zSfRUuwnS+fmawLA8xO5OoXiqFvToLQ4dluGqCYynLi+jvCZNT8TYzM2SwGq5BYz5VGLHPEqBcy9KgjvgqFJ/ETn4HkFci2K4jP304h5Q8KAPrO0tIGMv+HnkYR+oSQR/joqSwPOZC7HEGRD8hIr0SgBLU1IvlCQl+EeUbAoY4JQhqgnka5G4nsprcPdGCeoQZdhrkmy0FniGyD3fByFqJblF4loL3PVukrPJBnVcVE964pJjolVZ3TL14lSjSaK1wFP9oI/+fVSorhx2qnKA9exPwy6BShLD5vdrNa79CQmeY2VhktZVVKs06QLnvB/zwphL9KcfTgkmkY91bVdnmdo3gjaBE2CZf/JECvrbKyf4BdpXaxkir2UhAAAAAElFTkSuQmCC") no-repeat;
            background-size: 20px;
        }

        .accordion__title.active2 {
            color: #2B9FDF;
        }

        .accordion__title.active2:after {
            transform: rotate(-180deg);
        }
    </style>

</head>

<body>

    <!-- The foolowing php code will produce the header file-->

    <?php $page_name = "gate" ?>

    <?php include 'head_foot/header.php'; ?>

    <!-- End of the header code -->

    <!-- Main  -->

    <div class="container">
        <div class="jumbotron jumbotron-math">

            <div class="accordion">

                <div class="accordion__item">

                    <h2 class="accordion__title" >GATE Mathematics 2021</h2>
                    
                    <div class="accordion__body">
                        <hr>

                        <div class="card-body">

                            <div class="card-deck">
                                <div class="card left-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 1</span> <br>
                                            Let $A$ be $3\times 4$ matrix and $B$ be $4\times 3$ matrix with real entries 
                                            such that $AB$ is non-singular. Consider the following statements:
                                            <br>
                                            P: Nullity of $A$ is $0$. <br>
                                            Q: $BA$ is a non-singular matrix.
                                            <br> <br>
                                            Then
                                        </p>
                                    </div>
                                    <a href="2021/problem1_2021.php" target="_blank" class="stretched-link"></a>
                                </div>

                                <div class="card right-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 2</span> <br>
                                            Let $D=[-1,1]\times [-1,1]$. If the function $f:D\to \rbb$ is defined by
                                            $$
                                            f(x,y) =
                                            \begin{cases}
                                                \dfrac{x^2-y^2}{(x^2+y^2)^2}, & (x,y)\neq(0,0)\\
                                                        0,                              & (x,y)= (0,0)
                                                \end{cases},
                                            $$
                                            then
                                        </p>   
                                    </div> 
                                    <a href="2021/problem2_2021.php" target = "_blank" class="stretched-link"></a>
                                </div> 
                            </div> <!-- card-deck -->

                            <br>

                            <div class="card-deck">
                                <div class="card left-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 3</span> <br>
                                            Let $T(z)=\frac{a z+b}{c z+d}, a d-b c \neq 0$, be the Möbius transformation which maps the points $z_{1}=0, z_{2}=-i, z_{3}=\infty$ in the $z$ -plane onto the points $w_{1}=10$, $w_{2}=5-5 i, w_{3}=5+5 i$ in the $w$ -plane
                                        </p>
                                    </div>
                                    <a href="2021/problem3_2021.php" target="_blank" class="stretched-link"></a>
                                </div>

                                <div class="card right-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 4</span> <br>
                                            Let $R$ be the row reduced echelon form of a $4 \times 4$ real matrix $A$ and let the third column of $R$ be $\left[\begin{array}{l}0 \\ 1 \\ 0 \\ 0\end{array}\right] .$ Consider the following statements:
                                        </p>   
                                    </div> 
                                    <a href="2021/problem4_2021.php" target = "_blank" class="stretched-link"></a>
                                </div> 
                            </div> <!-- card-deck -->

                            <br>

                            <div class="card-deck">
                                <div class="card left-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 5</span> <br>
                                            The eigenvalues of the boundary value problem
                                            $$
                                            \begin{aligned}
                                            \frac{d^{2} y}{d x^{2}}+\lambda y=0, \quad & x \in(0, \pi),  \lambda>0 \\
                                            y(0)=0, &\quad y(\pi)-\frac{d y}{d x}(\pi)=0 
                                            \end{aligned}
                                            $$
                                          are given by
                                        </p>
                                    </div>
                                    <a href="2021/problem5_2021.php" target="_blank" class="stretched-link"></a>
                                </div>

                                <div class="card right-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 6</span> <br>
                                            The family of surfaces given by $u=x y+f\left(x^{2}-y^{2}\right)$, where $f: \mathbb{R} \rightarrow \mathbb{R}$ is a differentiable function, satisfies
                                        </p>   
                                    </div> 
                                    <a href="2021/problem6_2021.php" target = "_blank" class="stretched-link"></a>
                                </div> 
                            </div> <!-- card-deck -->

                            <br>

                            <div class="card-deck">
                                <div class="card left-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 7</span> <br>
                                            The function $u(x, t)$ satisfies the initial value problem $\frac{\partial^{2} u}{\partial t^{2}} =\frac{\partial^{2} u}{\partial x^{2}}, x \in \mathbb{R}, t > 0$ $u(x, 0)=0, \frac{\partial u}{\partial t}(x, 0)=4 x e^{-x^{2}}$
                                        </p>
                                    </div>
                                    <a href="2021/problem7_2021.php" target="_blank" class="stretched-link"></a>
                                </div>

                                <div class="card right-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 8</span> <br>
                                            Consider the fixed-point iteration $x_{n+1}=\varphi\left(x_{n}\right), n \geq 0$ with $\varphi(x)=3+(x-3)^{3}, \quad x \in(2.5,3.5)$, and the initial approximation $x_{0}=3.25$
                                        </p>   
                                    </div> 
                                    <a href="2021/problem8_2021.php" target = "_blank" class="stretched-link"></a>
                                </div> 
                            </div> <!-- card-deck -->

                            <br>

                            <div class="card-deck">
                                <div class="card left-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 9</span> <br>
                                           Let $\left\{e_{n}: n=1,2,3, \ldots\right\}$ be an orthonormal basis of a complex Hilbert space $H$. Consider the following statements:
                                        </p>
                                    </div>
                                    <a href="2021/problem9_2021.php" target="_blank" class="stretched-link"></a>
                                </div>

                                <div class="card right-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 10</span> <br>
                                            Let $f:\left(\frac{-\pi}{2}, \frac{\pi}{2}\right) \rightarrow \mathbb{R}$ be given by $f(x)=\frac{\pi}{2}+x-\tan ^{-1} x .$ Consider the following statements:
                                        </p>   
                                    </div> 
                                    <a href="2021/problem10_2021.php" target = "_blank" class="stretched-link"></a>
                                </div> 
                            </div> <!-- card-deck -->

                            <br>

                            <div class="card-deck">
                                <div class="card left-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 11</span> <br>
                                           Consider the following statements:<br> 
                                           P: $d_{1}(x, y)=\left|\log \left(\frac{x}{y}\right)\right|$ is a metric on $(0,1) .$<br> 
                                           Q: $d_{2}(x, y)=\left\{\begin{array}{cl}|x|+|y|, & \text { if } x \neq y, \\ 0, & \text { if } x=y,\end{array} \quad\right.$ is a metric on $(0,1) .$ 
                                        </p>
                                    </div>
                                    <a href="2021/problem11_2021.php" target="_blank" class="stretched-link"></a>
                                </div>

                                <div class="card right-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 12</span> <br>
                                            Let $f: \mathbb{R}^{3} \rightarrow \mathbb{R}$ be a twice continuously differentiable scalar field such that $\operatorname{div}(\nabla f)=6 .$ Let $S$ be the surface $x^{2}+y^{2}+z^{2}=1$ and $\hat{n}$ be unit outward normal to $S .$ Then the value of $\iint_{S}(\nabla f \cdot \hat{n}) d S$ is
                                        </p>   
                                    </div> 
                                    <a href="2021/problem12_2021.php" target = "_blank" class="stretched-link"></a>
                                </div> 
                            </div> <!-- card-deck -->

                            <br>

                        </div> <!-- card-body -->

                    </div> <!-- accordion__body -->

                </div> <!-- accordion__item -->


                <!-- 2020 -->
                
                <div class="accordion__item">

                    <h2 class="accordion__title" >GATE Mathematics 2020</h2>
                    
                    <div class="accordion__body">
                        <hr>
                        <div class="card-body">

<!-- ================================================================================================================= -->
                            <div class="card-deck">
                                <div class="card left-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 1</span> <br>
                                            Suppose that $\Im_1$ and $\Im_2$ are two topologies on $X$ induced by metrics $d_1$ and $d_2$, respectively, such that $\Im_1\subseteq \Im_2$. Then which of the following statements is TRUE?
                                        </p>
                                    </div>
                                    <a href="2020/problem1_2020.php" target="_blank" class="stretched-link"></a>
                                </div>

                                <div class="card right-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 2</span> <br>
                                            Let $D=[-1,1]\times [-1,1]$. If the function $f:D\to \rbb$ is defined by
                                            $$
                                            f(x,y) =
                                            \begin{cases}
                                                \dfrac{x^2-y^2}{(x^2+y^2)^2}, & (x,y)\neq(0,0)\\
                                                        0,                              & (x,y)= (0,0)
                                                \end{cases},
                                            $$
                                            then
                                        </p>   
                                    </div> 
                                    <a href="2020/problem2_2020.php" target = "_blank" class="stretched-link"></a>
                                </div> 
                            </div> <!-- card-deck -->
                            <br>
<!-- ================================================================================================================= -->
                            <div class="card-deck">
                                <div class="card left-card2">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 3</span> <br>
                                        The initial value problem $y' = y^{\frac{3}{5}}$ has
                                        <ol type="A">
                                            <li> a unique solution if $b=0$ </li>
                                            <li> no solution if $b=1$ </li>
                                            <li>infinitely many solutions if $b = 2$ </li>
                                            <li> a unique solution if $b=1$. </li>
                                        </ol>
                                        </p>
                                    </div>
                                    <a href="2020/problem3_2020.php" target="_blank" class="stretched-link"></a>
                                </div>

                                <div class="card right-card2">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 4</span> <br>
                                            Consider the following two statements:
                                            <ol type="I">
                                            <li> $\log(|z|)$ is harmonic on $\cbb\setminus \{0\}.$ </li>
                                            <li>$\log(|z|)$ has a harmonic conjugate on $\cbb\setminus \{0\}$.</li>
                                            </ol>
                                            Then
                                        </p>   
                                    </div> 
                                    <a href="2020/problem4_2020.php" target="_blank" class="stretched-link"></a>
                                </div> 
                            </div> <!-- card-deck -->
                            <br>                            

<!-- ================================================================================================================= -->
<!-- ================================================================================================================= -->

                            <div class="card-deck">
                                <div class="card left-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 5</span> <br>
                                            Let $G$ and $H$ be defined by
                                            \begin{align*}
                                                & G = \cbb\setminus \{z=x+\iota y\in \cbb : x\le 0,~ y=0\},\\
                                                & H = \cbb\setminus \{z=x+\iota y\in \cbb : x\in \zbb,\\
                                                &     \quad\qquad \qquad \qquad \qquad  x\le 0,~ y=0\}.\\
                                            \end{align*}
                                        </p>
                                    </div>
                                    <a href="2020/problem5_2020.php" target="_blank" class="stretched-link"></a>
                                </div>

                                <div class="card right-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 6</span> <br>
                                            Let $f(z)=e^{\frac{1}{z}},\,\,z\in\mathbb{C}\setminus\{0\}$ and let, for $n\in\mathbb{N}$,
                                            <span style="font-size: 15px;">$${R}_n=\left\{x+iy\in \mathbb{C}:\,\, |x|<\frac{1}{n},\,|y|<\frac{1}{n}\right\}\setminus\{0\}.$$</span>
                                            If for a subset $S$ of $\mathbb{C}$, $\overline{S}$ denotes the closure of $S$ in $\mathbb{C}$, then
                                        </p>   
                                    </div>
                                    <a href="2020/problem6_2020.php" target="_blank" class="stretched-link"></a>
                                </div> 
                            </div> <!-- card-deck -->
                            <br>

<!-- ================================================================================================================= -->
                            <div class="card-deck">
                                <div class="card left-card2">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 7</span> <br>
                                            Suppose that 
                                            \begin{align*}
                                                U&=\mathbb{R}^2\setminus \{(x,y)\in \mathbb{R}^2\,:\,x,y\in \mathbb{Q}\}\\
                                                U&=\mathbb{R}^2\setminus \left\{(x,y)\in \mathbb{R}^2\,:\,x>0,\,y=\frac{1}{x}\right\}
                                            \end{align*}
                                            Then, with respect to the Euclidean metric on $\mathbb{R}^2,$
                                        </p>
                                    </div>
                                    <a href="2020/problem7_2020.php" target="_blank" class="stretched-link"></a>
                                </div>

                                <div class="card right-card2">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 8</span> <br>
                                        If (D1) and (D2) denotes the dual problems of the linear programming problems (P1) and (P2), respectively, where 
                                            <span style="font-size: 15px;">
                                                \begin{align*}
                                                    \text{(P1)}: &~~ \text{minimize $x_1-x_2$ subject to}\\
                                                    & \qquad \qquad \text{ $-x_1+x_2=10,~ x_1,x_2\ge 0$,} \\
                                                    \text{(P2)}: &~~ \text{minimize $x_1-2x_2$ subject to }\\
                                                    & \qquad \quad \text{$-x_1+x_2=10,~x_1-x_2=10,~ x_1,x_2\ge 0$,}
                                                \end{align*}
                                            </span>
                                            then 
                                        </p>   
                                    </div> 
                                    <a href="2020/problem8_2020.php" target="_blank" class="stretched-link"></a>
                                </div> 
                            </div> <!-- card-deck -->
                            <br>  

<!-- ================================================================================================================= -->
<!-- ================================================================================================================= -->

                            <div class="card-deck">
                                <div class="card left-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 9</span> <br>
                                            If $(4,0)$ and $(0, \frac{-1}{2})$ are critical points of the function 
                                            <span style="font-size: 15px;">
                                                $$ f(x,y)=5-(\alpha+\beta) x^2+\beta y^2+(\alpha+1)y^3+x^3,$$
                                            </span>
                                            where $\alpha, \beta\in \mathbb{R}$, then
                                        </p>
                                    </div>
                                    <a href="2020/problem9_2020.php" target="_blank" class="stretched-link"></a>
                                </div>

                                <div class="card right-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 10</span> <br>
                                            Consider the iterative scheme
                                            \begin{equation*}
                                                x_n=\dfrac{x_{n-1}}{2}+\dfrac{3}{x_{n-1}},~n\geq 1,
                                            \end{equation*}
                                            with initial point $x_0>0$. Then the sequence $\{x_n\}$
                                        </p>   
                                    </div> <a href="problem10_2020.php" target="_blank" class="stretched-link"></a>
                                </div> 
                            </div> <!-- card-deck -->
                            <br>
<!-- ================================================================================================================= -->
                            <div class="card-deck">
                                <div class="card left-card2">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <span class="card1">Problem 11</span> <br>
                                            Let $C[0,1]$ denote the space of all real valued continuous functions on $[0,1]$ equipped with the supremum norm $\|\cdot\|_{\infty}$. Let $T:C[0,1]\to C[0,1]$ be the linear operator defined by $$T(f)(x)=\int_0^x e^{-y}f(y)dy.$$
                                        </p>
                                    </div><a href="2020/problem11_2020.php" target="_blank" class="stretched-link"></a>
                                </div>

                                <div class="card right-card2">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <span class="card1">Problem 12</span> <br>
                                            Suppose that $M$ is a $5\times 5$ matrix with real entries and $p(x)=\det(xI-M).$ Then
                                        </p>   
                                    </div> 
                                    <a href="2020/problem12_2020.php" target="_blank" class="stretched-link"></a>
                                </div> 
                            </div> <!-- card-deck -->
                            <br>

<!-- ================================================================================================================= -->
<!-- ================================================================================================================= -->

                            <div class="card-deck">
                                <div class="card left-card1">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <span class="card1">Problem 13</span> <br>
                                            Let $C[0,1]$ denote the space of all real valued continuous functions on $[0,1]$ equipped with the supremum norm $||\cdot||_{\infty}$. Let $f\in C[0,1]$ be such that 
                                                $$|f(x)-f(y)|\leq M|x-y|$$
                                        for all $x,y\in[0,1]$ and for some $M > 0$.
                                        </p>
                                    </div>
                                    <a href="2020/problem13_2020.php" target="_blank" class="stretched-link"></a>
                                </div>

                                <div class="card right-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 14</span> <br>
                                            Let $K:\mathbb{R} \times (0,\infty)\to \mathbb{R}$ be a function such that the solution of the initial value problem 
                                            $\frac{\partial u}{\partial t}=\frac{\partial^2 u}{\partial x^2}, ~u(x,0)=f(x), ~x\in \mathbb{R}, ~t>0,$ is given by
                                        </p>   
                                    </div> <a href="problem14_2020.php" target="_blank" class="stretched-link"></a>
                                </div> 
                            </div> <!-- card-deck -->
                            <br>

<!-- ================================================================================================================= -->
                            <div class="card-deck">
                                <div class="card left-card2">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 15</span> <br>
                                            The number of cyclic subgroups of the quaternion group 
                                            $$
                                                Q_8 = \left\langle a,b~|~ a^4=1,~a^2=b^2,~ba=a^3b \right\rangle
                                        $$
                                            is _______________________.
                                        </p>
                                    </div>
                                    <a href="2020/problem15_2020.php" target="_blank" class="stretched-link"></a>
                                </div>

                                <div class="card right-card2">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 16</span> <br>
                                            The number of elements of order $3$ in the symmetric group $S_6$ is __________________.
                                        </p>   
                                    </div> 
                                    <a href="2020/problem16_2020.php" target="_blank" class="stretched-link"></a>
                                </div> 
                            </div> <!-- card-deck -->
                            <br>

<!-- ================================================================================================================= -->
<!-- ================================================================================================================= -->

                            <div class="card-deck">
                                <div class="card left-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 17</span> <br>
                                            Let $F$ be a field with $4096$ elements. The number of proper subfields of $F$ is $\_\_\_\_\_$.
                                        </p>
                                    </div>
                                    <a href="2020/problem17_2020.php" target="_blank" class="stretched-link"></a>
                                </div>

                                <div class="card right-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 18</span> <br>
                                            If $\left(x_{1}^{*}, x_{2}^{*}\right)$ is an optimal solution of the linear programming problem,
                                            $$
                                            \text { minimize } x_{1}+2 x_{2}
                                            $$
                                            subject to
                                        </p>   
                                    </div> 
                                    <a href="2020/problem18_2020.php" target="_blank" class="stretched-link"></a>
                                </div> 
                            </div> <!-- card-deck -->
                            <br>

<!-- ================================================================================================================= -->
                            <div class="card-deck">
                                <div class="card left-card2">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 19</span> <br>
                                            Let $a,b,c\in \mathbb{R}$ be such that the quadrature rule $$\int_{-1}^1f(x)dx\sim af(-1)+bf(0)+cf'(1)$$ is exact for all polynomials of degree less or equal to 2. Then
                                        </p>
                                    </div>
                                    <a href="2020/problem19_2020.php" target="_blank" class="stretched-link"></a>
                                </div>

                                <div class="card right-card2">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 20</span> <br>
                                            Let $f(x)=x^4$ and let $p(x)$ be the interpolating polynomial of $f$ at nodes $1,2$ and $3$. Then $p(0)$ is equal to $\_\_\_\_\_$.
                                        </p>   
                                    </div> 
                                    <a href="2020/problem20_2020.php" target="_blank" class="stretched-link"></a>
                                </div> 
                            </div> <!-- card-deck -->
                            <br>

<!-- ================================================================================================================= -->
<!-- ================================================================================================================= -->

                            <div class="card-deck">
                                <div class="card left-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 21</span> <br>
                                            For $n\geq 2$ define the sequence $\{x_n\}$ by 
                                            $$x_n=\dfrac{1}{2\pi}\int_{0}^{\frac{\pi}{2}}\tan^{\frac{1}{n}}t \,{\rm d}t.$$
                                            Then the sequence $\{x_n\}$ converges to $\_\_\_\_\_$.
                                        </p>
                                    </div>
                                    <a href="2020/problem21_2020.php" target="_blank" class="stretched-link"></a>
                                </div>

                                <div class="card right-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 22</span> <br>
                                            Let $L^{2}[0,10]=\left\{f:[0,10] \rightarrow \mathbb{R}: f\right.$ is Lebesgue measurable and $\left.\int_{0}^{10} f^{2} d x<\infty\right\}$ equipped with the norm
                                        </p>   
                                    </div> <a href="2020/problem22_2020.php" target="_blank" class="stretched-link"></a>
                                </div> 
                            </div> <!-- card-deck -->
                            <br>

<!-- ================================================================================================================= -->
                            <div class="card-deck">
                                <div class="card left-card2">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 23</span> <br>
                                            If $\left\{x_{13}, x_{22}, x_{23}=10, x_{31}, x_{32}, x_{34}\right\}$ is the set of basic variables of a balanced transportation problem seeking to minimize cost of transportation from origins to destinations, where the cost matrix is
                                        </p>
                                    </div>
                                    <a href="2020/problem23_2020.php" target="_blank" class="stretched-link"></a>
                                </div>

                                <div class="card right-card2">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 24</span> <br>
                                            Let $\mathbb{Z}_{225}$ be the ring of integers modulo $225$. Let $x$ be the number of prime ideals and $y$ be the number of nontrivial units in $\mathbb{Z}_{225}$, then $x+y$ is equal to $\_\_\_\_\_$.
                                        </p>   
                                    </div> 
                                    <a href="2020/problem24_2020.php" target="_blank" class="stretched-link"></a>
                                </div> 
                            </div> <!-- card-deck -->
                            <br>

<!-- ================================================================================================================= -->
<!-- ================================================================================================================= -->

                            <div class="card-deck">
                                <div class="card left-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 25</span> <br>
                                            Let $u(x,t)$ be the solution of 
                                            \begin{equation*}
                                            \frac{\partial^2 u}{\partial t^2}-\frac{\partial^2 u}{\partial x^2}=0,\\
                                            ~u(x,0)=f(x),~\frac{\partial u}{\partial t}(x,0)=0, x\in \mathbb{R}, t >0,
                                            \end{equation*} 
                                            where $f$ is a twice continuously differentiable function.
                                        </p>
                                    </div>
                                    <a href="2020/problem25_2020.php" target="_blank" class="stretched-link"></a>
                                </div>

                                <div class="card right-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 26</span> <br>
                                            Let $\{e_n\}_1^{\infty}$ be an orthonormal basis for a separable Hilbert space $H$ with the inner product $\langle \cdot, \cdot \rangle$. Define $$f_n=e_n-\frac{1}{n+1}e_{n+1},\text{ for }n\in \mathbb{N}.$$ Then 
                                        </p>   
                                    </div> <a href="2020/problem26_2020.php" target="_blank" class="stretched-link"></a>
                                </div> 
                            </div> <!-- card-deck -->
                            <br>

<!-- ================================================================================================================= -->
                            <div class="card-deck">
                                <div class="card left-card2">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 27</span> <br>
                                            Suppose $V$ is a finite dimensional non-zero vector space over $\mathbb{C}$ and $T:V\to V$ is a linear transformation such that Range $(T)$=Nullspace $(T)$. Then which in the following statements is FALSE?
                                        </p>
                                    </div>
                                    <a href="2020/problem27_2020.php" target="_blank" class="stretched-link"></a>
                                </div>

                                <div class="card right-card2">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 28</span> <br>
                                            Let $P\in M_{m\times n}(\mathbb{R})$. Consider the following statements:
                                            <br>
                                            <ol type="I">
                                            <li>If $XPY=0$ for all $X\in M_{1\times m}(\mathbb{R})$ and $Y\in M_{n\times 1}(\mathbb{R})$, then $P=0$.</li>
                                            <li>If $m=n$, $P$ is symmetric and $P^2=0$, then $P=0$.</li>
                                            </ol>
                                            Then
                                        </p>   
                                    </div> 
                                    <a href="2020/problem28_2020.php" target="_blank" class="stretched-link"></a>
                                </div> 
                            </div> <!-- card-deck -->
                            <br>

<!-- ================================================================================================================= -->
<!-- ================================================================================================================= -->

                            <div class="card-deck">
                                <div class="card left-card1">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <span class="card1">Problem 29</span> <br>
                                            For $n \in \mathbb{N},$ let $T_{n}:\left(l^{1},\|\cdot\|_{1}\right) \rightarrow\left(l^{\infty},\|\cdot\|_{\infty}\right)$ and $T:\left(l^{1},\|\cdot\|_{1}\right) \rightarrow\left(l^{\infty},\|\cdot\|_{\infty}\right)$ be the bounded linear operators defined by 
                                            \begin{align*}
                                            &T_{n}\left(x_{1}, x_{2}, \ldots\right)=\left(y_{1}, y_{2},\ldots\right),\\
                                            &\text { where } y_{j}=\left\{\begin{array}{cl} 
                                                                        x_{j}, & j \leq n \\
                                                                        x_{n}, & j>n
                                                                    \end{array}\right.
                                            \end{align*}                            
                                        </p>
                                    </div>
                                    <a href="2020/problem29_2020.php" target="_blank" class="stretched-link"></a>
                                </div>

                                <div class="card right-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 30</span> <br>
                                            Let $P(\mathbb{R})$ denote the power set of $\mathbb{R}$, equipped with the metric $$d(U, V)=\sup _{x \in \mathbb{R}}\left|~\chi_{U}(x)-\chi_{V}(x)~\right|$$ where $\chi_{U}$ and $\chi_{V}$ denote the characteristic functions of the subsets $U$ and $V$, respectively, of $\mathbb{R}$. The set $\{\{m\}: m \in \mathbb{Z}\}$ in the metric space $(P(\mathbb{R}), d)$ is
                                        </p>   
                                    </div> <a href="2020/problem30_2020.php" target="_blank" class="stretched-link"></a>
                                </div> 
                            </div> <!-- card-deck -->
                            <br>

<!-- ================================================================================================================= -->
                            <div class="card-deck">
                                <div class="card left-card2">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 31</span> <br>
                                            Let $f: \mathbb{R}\to \mathbb{R}$ be defined by
                                            $$f(x)=\sum_{n=0}^{\infty}\frac{1}{2^n} \chi_{(n,n+1]}(x),$$
                                            where $\chi_{(n,n+1]}$ is the characteristic function of the interval $(n,n+1]$. For $\alpha \in \mathbb{R}$, let
                                            $S_{\alpha}=\{x\in \mathbb{R}: f(x)> \alpha\}$. Then
                                        </p>
                                    </div>
                                    <a href="2020/problem31_2020.php" target="_blank" class="stretched-link"></a>
                                </div>

                                <div class="card right-card2">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 32</span> <br>
                                            For $n\in \mathbb{N}$, let $f_n, \, g_n \,: (0,1)\to \mathbb{R}$ be functions defined by
                                            \begin{equation*}
                                                f_n(x)=x^n \text{ and } g_n(x)=x^m(1-x).
                                            \end{equation*}
                                        </p>   
                                    </div> 
                                    <a href="2020/problem32_2020.php" target="_blank" class="stretched-link"></a>
                                </div> 
                            </div> <!-- card-deck -->
                            <br>

<!-- ================================================================================================================= -->
<!-- ================================================================================================================= -->

                            <div class="card-deck">
                                <div class="card left-card1">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <span class="card1">Problem 33</span> <br>
                                            Let $u$ be a solution of the differential equation $y'\,+\,x y=0$ and let $\phi=u\, \psi$ be a solution of the differential equation $$y''\,+\, 2xy'\,+\,(x^2+2)y\,=\,0$$ satisfying $\phi(0)=1$ and $\phi'(0)=0$. Then $\phi(x)$ is
                                        </p>
                                    </div>
                                    <a href="2020/problem33_2020.php" target="_blank" class="stretched-link"></a>
                                </div>

                                <div class="card right-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 34</span> <br>
                                            For $n\in \mathbb{N}\cup \{0\}$, let $y_n$ be the solution of the differential equation $$xy''+(1-x)y'+ny=0$$
                                            satisfying $y_n(0)=1$. For which of the following functions $\omega(x)$, the integral
                                            $$\int_{0}^{\infty}y_p(x)y_q(x)\omega(x)\,{\rm d}x, \,(p\neq q)$$
                                            is equal to zero?
                                        </p>   
                                    </div> <a href="2020/problem34_2020.php" target="_blank" class="stretched-link"></a>
                                </div> 
                            </div> <!-- card-deck -->
                            <br>

<!-- ================================================================================================================= -->
                            <div class="card-deck">
                                <div class="card left-card2">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 35</span> <br>
                                            Suppose that <span style="font-size: 15px;">$$X=\{(0,0)\} \cup\left\{\left(x, \sin \frac{1}{x}\right): x \in \mathbb{R} \backslash\{0\}\right\}$$</span> and <span style="font-size: 15px;"> $$Y=\{(0,0)\} \cup\left\{\left(x, x \sin \frac{1}{x}\right): x \in \mathbb{R} \backslash\{0\}\right\}$$ </span>
                                        </p>
                                    </div>
                                    <a href="2020/problem35_2020.php" target="_blank" class="stretched-link"></a>
                                </div>

                                <div class="card right-card2">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 36</span> <br>
                                            If $f: \mathbb{C} \backslash\{0\} \rightarrow \mathbb{C}$ is a function such that $f(z)=f\left(\frac{z}{|z|}\right)$ and its restriction to the unit circle is continuous, then
                                        </p>   
                                    </div> 
                                    <a href="2020/problem36_2020.php" target="_blank" class="stretched-link"></a>
                                </div> 
                            </div> <!-- card-deck -->
                            <br> 

<!-- ================================================================================================================= -->
<!-- ================================================================================================================= -->

                            <div class="card-deck">
                                <div class="card left-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 37</span> <br>
                                            For a subset $S$ of a topological space, let $\operatorname{Int}(S)$ and $\bar{S}$ denote the interior and closure of $S$, respectively. Then which of the following statements is TRUE?
                                        </p>
                                    </div>
                                    <a href="2020/problem37_2020.php" target="_blank" class="stretched-link"></a>
                                </div>

                                <div class="card right-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 38</span> <br>
                                            Suppose $\mathfrak{I}_{1}, \mathfrak{I}_{2}$ and $\mathfrak{I}_{3}$ are the smallest topologies on $\mathbb{R}$ containing $S_{1}, S_{2}$ and $S_{3}$ respectively, where 
                                            \begin{array}{l} S_{1}=\left\{\left(a, a+\frac{\pi}{n}\right): a \in \mathbb{Q}, n \in \mathbb{N}\right\} \\
                                                S_{2}=\{(a, b): a < b, \quad a, b \in \mathbb{Q}\} \\ 
                                                S_{3}=\{(a, b): a < b, \quad a, b \in \mathbb{R}\}
                                            \end{array}
                                        </p>   
                                    </div> <a href="2020/problem38_2020.php" target="_blank" class="stretched-link"></a>
                                </div> 
                            </div> <!-- card-deck -->
                            <br>

<!-- ================================================================================================================= -->
                            <div class="card-deck">
                                <div class="card left-card2">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 39</span> <br>
                                            Let $M=\left[\begin{array}{lll}\alpha & 3 & 0 \\ \beta & 3 & 1 \\ 0 & 1 & 2\end{array}\right] .$ Consider the following statements:
                                        </p>
                                    </div>
                                    <a href="2020/problem39_2020.php" target="_blank" class="stretched-link"></a>
                                </div>

                                <div class="card right-card2">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 40</span> <br>
                                            Let $I$ and $J$ be the ideals generated by $\{5, \sqrt{10}\}$ and $\{4, \sqrt{10}\}$ in the ring $\mathbb{Z}[\sqrt{10}]=\{a+b \sqrt{10} \mid a, b \in \mathbb{Z}\},$ respectively. Then
                                        </p>   
                                    </div> 
                                    <a href="2020/problem40_2020.php" target="_blank" class="stretched-link"></a>
                                </div> 
                            </div> <!-- card-deck -->
                            <br> 

<!-- ================================================================================================================= -->
<!-- ================================================================================================================= -->

                            <div class="card-deck">
                                <div class="card left-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 41</span> <br>
                                            Suppose $V$ is a finite dimensional vector space over $\mathbb{R} .$ If $W_{1}, W_{2}$ and $W_{3}$ are subspaces of $V,$ then which of the following statements is TRUE?
                                        </p>
                                    </div>
                                    <a href="2020/problem41_2020.php" target="_blank" class="stretched-link"></a>
                                </div>

                                <div class="card right-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 42</span> <br>
                                            Let $\alpha, \beta \in \mathbb{R}, \alpha \neq 0 .$ The system 
                                            $$\begin{array}{c}
                                            x_{1}-2 x_{2}+\alpha x_{3}=8 \\
                                            x_{1}-x_{2}+x_{4}=\beta \\
                                            x_{1}, x_{2}, x_{3}, x_{4} \geq 0
                                            \end{array}$$ has NO basic feasible solution if
                                        </p>   
                                    </div> <a href="2020/problem42_2020.php" target="_blank" class="stretched-link"></a>
                                </div> 
                            </div> <!-- card-deck -->
                            <br>
<!-- ================================================================================================================= -->
                            <div class="card-deck">
                                <div class="card left-card2">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 43</span> <br>
                                            Let $0< p < 1$ and let $$X=\left\{f: \mathbb{R} \rightarrow \mathbb{R} \text { is continuous and }\\ \int_{\mathbb{R}}|f(x)|^{p} d x<\infty\right\}$$
                                            For $f \in X,$ define 
                                        </p>
                                    </div>
                                    <a href="2020/problem43_2020.php" target="_blank" class="stretched-link"></a>
                                </div>

                                <div class="card right-card2">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 44</span> <br>
                                            Suppose that $\phi_{1}$ and $\phi_{2}$ are linearly independent solutions of the differential equation $$ 2 x^{2} y^{\prime \prime}-\left(x+x^{2}\right) y^{\prime}+\left(x^{2}-2\right) y=0 $$ and $\phi_{1}(0)=0 .$
                                        </p>   
                                    </div> 
                                    <a href="2020/problem44_2020.php" target="_blank" class="stretched-link"></a>
                                </div> 
                            </div> <!-- card-deck -->
                            <br>                            

<!-- ================================================================================================================= -->
<!-- ================================================================================================================= -->

                            <div class="card-deck">
                                <div class="card left-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 45</span> <br>
                                            Suppose that $f(z)=\prod_{n=1}^{17}\left(z-\frac{\pi}{n}\right), ~z\in \mathbb{C}$ and $\gamma(t)=e^{2it}, ~t\in [0,2\pi]$. If $$\int_{\gamma}^{}\dfrac{f'(z)}{f(z)}\,{\rm d}z=\alpha \pi \iota$$
                                        </p>
                                    </div>
                                    <a href="2020/problem45_2020.php" target="_blank" class="stretched-link"></a>
                                </div>

                                <div class="card right-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 46</span> <br>
                                            If $\gamma(t)=\frac{1}{2}e^{3\pi \iota t}, t\in [0,2]$ and

                                            $$\int_{\gamma}^{}\dfrac{1}{z^2(e^z-1)}\,{\rm d}z=\beta \pi \iota,$$

                                            then $\beta$ is equal to $\_\_\_\_$.
                                        </p>   
                                    </div> <a href="2020/problem46_2020.php" target="_blank" class="stretched-link"></a>
                                </div> 
                            </div> <!-- card-deck --> 
                            <br>

<!-- ================================================================================================================= -->
                            <div class="card-deck">
                                <div class="card left-card2">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 47</span> <br>
                                            Let $K=\mathbb{Q}(\sqrt{3+2 \sqrt{2}}, \omega),$ where $\omega$ is a primitive cube root of unity. Then the degree of extension of $K$ over $\mathbb{Q}$ is $\_\_\_\_\_$
                                        </p>
                                    </div>
                                    <a href="2020/problem47_2020.php" target="_blank" class="stretched-link"></a>
                                </div>

                                <div class="card right-card2">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 48</span> <br>
                                            Let $\alpha \in \mathbb{R}$. If $(3,0,0, \beta)$ is an optimal solution of the linear programming problem
                                            $$
                                            \text { minimize } x_{1}+x_{2}+x_{3}-\alpha x_{4}
                                            $$
                                            subject to
                                            
                                        </p>   
                                    </div> 
                                    <a href="2020/problem48_2020.php" target="_blank" class="stretched-link"></a>
                                </div> 
                            </div> <!-- card-deck -->
                            <br>  

<!-- ================================================================================================================= -->
<!-- ================================================================================================================= -->

                            <div class="card-deck">
                                <div class="card left-card1">
                                    <div class="card-body ">
                                        <p class="card-text">
                                            <span class="card1">Problem 49</span> <br>
                                            Suppose $T:\mathbb{R}^4\to \mathbb{R}[x]$ is a linear transformation over $\mathbb{R}$ satisfying
                                            \begin{align*}
                                            T(-1,1,1,1)&=x^2+2x^4,\\
                                            T(1,2,3,4) &=1-x^2,\\
                                            T(2,-1,-1,0)&=x^3-x^4.
                                            \end{align*}
                                            Then the coefficient of $x^4$ in $T(-3,5,6,6)$ is $\_\_\_\_\_$.
                                        </p>
                                    </div>
                                    <a href="2020/problem49_2020.php" target="_blank" class="stretched-link"></a>
                                </div>

                                <div class="card right-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 50</span> <br>
                                            Let $$\vec{F}(x,y,z)=(2x-2y\cos x)\hat{i}\,+\\ (2y-y^2\sin x)\hat{j}\,+\,4z\hat{k}$$ and let $S$ be the surface of the tetrahedron bounded by the planes
                                            
                                        </p>   
                                    </div> <a href="2020/problem50_2020.php" target="_blank" class="stretched-link"></a>
                                </div> 
                            </div><!-- card-deck -->
                            <br>

<!-- ================================================================================================================= -->
                            <div class="card-deck">
                                <div class="card left-card2">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <span class="card1">Problem 51</span> <br>
                                            Let $\vec{F}=(x+2y)e^z\hat{i}\,+\,(ye^z+x^2)\hat{j}+y^2z\hat{k}$ and let $S$ be the surface $x^2+y^2+z=1,~z\geq 0$. If $\hat{n}$ is a unit normal to $S$ and
                                        </p>
                                    </div>
                                    <a href="2020/problem51_2020.php" target="_blank" class="stretched-link"></a>
                                </div>

                                <div class="card right-card2">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 52</span> <br>
                                            Let $G$ be a non-cyclic group of order $57$. Then the number of elements of order 3 in $G$ is $\_\_\_\_\_\_\_$.
                                        </p>   
                                    </div> 
                                    <a href="2020/problem52_2020.php" target="_blank" class="stretched-link"></a>
                                </div> 
                            </div> <!-- card-deck -->
                            <br>

<!-- ================================================================================================================= -->
<!-- ================================================================================================================= -->

                            <div class="card-deck">
                                <div class="card left-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 53</span> <br>
                                            The coefficient of $(x-1)^{5}$ in the Taylor expansion about $x=1$ of the function $$ F(x)=\int_{1}^{x} \frac{\log _{\mathrm{e}} t}{t-1} d t, \quad 0< x < 2 $$ is $\_\_\_\_\_\_$
                                        </p>
                                    </div>
                                    <a href="2020/problem53_2020.php" target="_blank" class="stretched-link"></a>
                                </div>

                                <div class="card right-card1">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 54</span> <br>
                                            Let $u(x,y)$ be the solution of the initial value problem
                                            \begin{align}
                                            \frac{\partial u}{\partial x}+\sqrt{u}\frac{\partial u}{\partial y}=0, ~u(x,0)=1+x^2.
                                            \end{align}
                                            Then the value of $u(0,1)$ is $\_\_\_\_\_$
                                        </p>   
                                    </div>
                                    <a href="2020/problem54_2020.php" target="_blank" class="stretched-link"></a>
                                </div> 
                            </div> <br>

<!-- ================================================================================================================= -->
                            <div class="card-deck">
                                <div class="card left-card2">
                                    <div class="card-body text-justify">
                                        <p class="card-text">
                                            <span class="card1">Problem 55</span> <br>
                                            The value of $$\lim_{n\to \infty}\int_{0}^{1}nx^ne^{x^2}\, {\rm d}x$$ is $\_\_\_\_\_\_\_\_\_\_\_$
                                        </p>
                                    </div>
                                    <a href="2020/problem55_2020.php" target="_blank" class="stretched-link"></a>
                                </div>
                            </div> <!-- card-deck -->

                        </div> <!-- card-body -->

                    </div> <!-- accordion__body -->

                </div> <!-- accordion__item -->
                
            </div> <!-- accordion -->

        </div>  <!-- jumbotran -->
    </div> <!-- container -->
        

<br><br><br><br><br>
   

    <!--- Footer -->
    <?php include 'head_foot/footer.php'; ?>
    <!--- End Footer -->

    <!-- Java Script -->
    <script>
        $(".accordion__title.active2").next().slideDown();
        $(".accordion__title").on("click", function () {
        if( $(this).hasClass('active2') ) {
                $(this).removeClass("active2").next().slideUp();
            } else {
                $(".accordion__title.active2").removeClass("active2").next(".accordion__body").slideUp();
            $(this).addClass('active2').next('.accordion__body').slideDown();
            }
        });
    </script>

</body>

</html>