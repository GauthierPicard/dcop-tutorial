<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<!-- 2020-05-27 Wed 14:56 -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Tutorial on Distributed Constraint Optimization <br/> for the Internet-of-Things (DCOP4IoT)</title>
<meta name="generator" content="Org mode" />
<meta name="author" content="Gauthier Picard" />
<link rel="stylesheet" type="text/css" href="styles/bigblow/css/htmlize.css"/>
<link rel="stylesheet" type="text/css" href="styles/bigblow/css/bigblow.css"/>
<link rel="stylesheet" type="text/css" href="styles/bigblow/css/hideshow.css"/>
<script type="text/javascript" src="styles/bigblow/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="styles/bigblow/js/jquery-ui-1.10.2.min.js"></script>
<script type="text/javascript" src="styles/bigblow/js/jquery.localscroll-min.js"></script>
<script type="text/javascript" src="styles/bigblow/js/jquery.scrollTo-1.4.3.1-min.js"></script>
<script type="text/javascript" src="styles/bigblow/js/jquery.zclip.min.js"></script>
<script type="text/javascript" src="styles/bigblow/js/bigblow.js"></script>
<script type="text/javascript" src="styles/bigblow/js/hideshow.js"></script>
<script type="text/javascript" src="styles/lib/js/jquery.stickytableheaders.min.js"></script>
<script type="text/javascript">
/*
@licstart  The following is the entire license notice for the
JavaScript code in this tag.

Copyright (C) 2012-2017 Free Software Foundation, Inc.

The JavaScript code in this tag is free software: you can
redistribute it and/or modify it under the terms of the GNU
General Public License (GNU GPL) as published by the Free Software
Foundation, either version 3 of the License, or (at your option)
any later version.  The code is distributed WITHOUT ANY WARRANTY;
without even the implied warranty of MERCHANTABILITY or FITNESS
FOR A PARTICULAR PURPOSE.  See the GNU GPL for more details.

As additional permission under GNU GPL version 3 section 7, you
may distribute non-source (e.g., minimized or compacted) forms of
that code without the copy of the GNU GPL normally required by
section 4, provided you include this license notice and a URL
through which recipients can access the Corresponding Source.


@licend  The above is the entire license notice
for the JavaScript code in this tag.
*/
<!--/*--><![CDATA[/*><!--*/
 function CodeHighlightOn(elem, id)
 {
   var target = document.getElementById(id);
   if(null != target) {
     elem.cacheClassElem = elem.className;
     elem.cacheClassTarget = target.className;
     target.className = "code-highlighted";
     elem.className   = "code-highlighted";
   }
 }
 function CodeHighlightOff(elem, id)
 {
   var target = document.getElementById(id);
   if(elem.cacheClassElem)
     elem.className = elem.cacheClassElem;
   if(elem.cacheClassTarget)
     target.className = elem.cacheClassTarget;
 }
/*]]>*///-->
</script>
</head>
<body>
<div id="content">
<h1 class="title">Tutorial on Distributed Constraint Optimization <br/> for the Internet-of-Things (DCOP4IoT)
<br>
<span class="subtitle">at ECAI 2020, the 24th European Conference on Artificial Intelligence,</span>
</h1>
<div id="table-of-contents">
<h2>Table of Contents</h2>
<div id="text-table-of-contents">
<ul>
<li><a href="#short-description">1. Short description</a></li>
<li><a href="#Outline">2. Outline</a></li>
<li><a href="#h:4A890F28-8878-493E-9DE0-7A479B8AE651">3. Contents</a></li>
<li><a href="#audience">4. Audience</a></li>
<li><a href="#organizers">5. Organizers</a></li>
</ul>
</div>
</div>

<div id="outline-short-description" class="outline-2">
<h2 id="short-description"><a id="org82e87e0"></a><span class="section-number-2">1</span> Short description</h2>
<div class="outline-text-2" id="text-short-description">
<p>
The ever-growing nature of the Internet-of-Things (IoT) and related application domains (Smart home, Smart buildings, etc.) with numerous objects and configurations require more and more autonomy and coordination. Multi-agent systems are a suitable paradigm to model and develop applications and infrastructure to implement such IoT environments. Within the multi-agent techniques, distributed constraint reasoning is a relevant approach to model complex problems and decentralize decisions in a coordinated way. The workshop proposes to review some DCOP solution methods relevant for the IoT context, to model a real smart home case study, and finally to program and deploy DCOP solutions methods on a real IoT environment composed of Raspberry Pis.
</p>
</div>
</div>

<div id="outline-Outline" class="outline-2">
<h2 id="Outline"><a id="org70dc8af"></a><span class="section-number-2">2</span> Outline</h2>
<div class="outline-text-2" id="text-Outline">
<p>
The Tutorial on Distributed Constraint Optimization for the Internet-of-Things is expected to be a half-day tutorial alternates both theoretical and practical concepts on DCOP models, algorithms and applications to the Internet-of-Things field. Some time is devoted to apply these concepts on Raspberry Pis.
</p>

<p>
The overall programme is as follows:
</p>

<ol class="org-ol">
<li>DCOP Framework [30min]: theoretical presentation of the DCOP model and some issues raised when applying them to the specific case of IoT.</li>
<li>Hands on PyDCOP I [20min]: practical illustration of the definition of DCOPs using the pyDCOP programmig environment.</li>
<li>Focus on Some Solution Methods [30min]: presentation of some DCOP solution methods which have good properties to be deployed on IoT environments (DPOP, Max-Sum, DSA, MGM).</li>
<li>Hands on PyDCOP II [20min]: practical illustration of running the reviewed algorithms on some toy problems.</li>
<li>Focus on Smart Environment Configuration Problems Distributing Computations [30min]: ex- ploration of a smart environment problem that illustrates the potential of using DCOPs in IoT envi- ronments. We also raise and solve the problem of distributing computations on the different objects in the environment.</li>
<li>Hands on PyDCOP III [20min]: pratical application of the distribution notions.</li>
<li>Dynamic DCOPs [30min]: discusses how to repair a DCOP deloyment as to ensure the resilience of the embedded systems, using the pyDCOP repair utilities.</li>
</ol>

<p>
The practical session relies on an Open Source library that is available at <a href="https://github.com/Orange-OpenSource/">https://github.com/Orange-OpenSource/</a>
pyDCOP. A virtual machine containing all the required libraries and software is provided for download.
</p>
</div>
</div>

<div id="outline-h:4A890F28-8878-493E-9DE0-7A479B8AE651" class="outline-2">
<h2 id="h:4A890F28-8878-493E-9DE0-7A479B8AE651"><a id="org20e602e"></a><span class="section-number-2">3</span> Contents</h2>
<div class="outline-text-2" id="text-h:4A890F28-8878-493E-9DE0-7A479B8AE651">
<p>
The slides presented during the tutorial are available here : <a href="https://www.emse.fr/~picard/dcop4iot/tutorial-DCOP4IoT.pdf">https://www.emse.fr/~picard/dcop4iot/tutorial-DCOP4IoT.pdf</a>
</p>

<p>
Full online documentation for pyDCOP is available here : <a href="https://pydcop.readthedocs.io">https://pydcop.readthedocs.io</a> 
</p>
</div>
</div>

<div id="outline-audience" class="outline-2">
<h2 id="audience"><a id="org4b4186a"></a><span class="section-number-2">4</span> Audience</h2>
<div class="outline-text-2" id="text-audience">
<p>
We expect an heterogeneous audience interested in applying artificial agent and multiagent techniques to the Internet-of-Things, with a focus on distributed optimization.
</p>

<p>
The first part can be attended by anyone familiar with constraint-based reasoning and multi-agent systems. Programming (e.g. Python) and problem modeling (constraint based modeling, linear programming, optimization) skills are basic requirements to follow the practical second part.
</p>

<p>
For many year DCOP topic has been part of summer school and tutorial session of main AI and multi-agent systems conferences (IJCAI, ECAI, AAMAS). Beside, the OPTMAS-DCR workshop series also attract AAMAS attendants since 2010. We add here a more « practical » dimension to the topics by applying such techniques to the Internet-of-Things, which could generate up to $11.1 trillion a year in economic value by 2025, and which is thus an attractive application field for AI and Multi-Agent researchers.
We are thus confident about the attractiveness of our tutorial for the AAMAS audience.
</p>
</div>
</div>

<div id="outline-organizers" class="outline-2">
<h2 id="organizers"><a id="org104e498"></a><span class="section-number-2">5</span> Organizers</h2>
<div class="outline-text-2" id="text-organizers">
</div>

<div id="outline-gauthier" class="outline-3">
<h3 id="gauthier"><a id="orgd8d1d82"></a>Gauthier Picard</h3>
<div class="outline-text-3" id="text-gauthier">
<p>
<b>Gauthier Picard</b> received a Ph.D. degree in Computer Science from the University of Toulouse in 2004, and the Habilitation degree in Computer Science from the University of Saint-Etienne in 2014. He is currently an associate professor in Computer Science at MINES Saint-Etienne and a full researcher at Laboratoire Hubert Curien UMR CNRS 5516. His research focuses on cooperation and adaptation in multiagent systems and distributed optimization with applications to smart grids, aircraft design, ambient intelligence, and intelligent transport. He has been in charge of the following organization activities: SASO (2016, PC Chair), SASO (2015, WS Chair), JFSMA (2015, Organization Chair), SASO (2014, Doctoral Consortium Chair), SASO (2012, Organization Chair), WI-IAT (2011, Demo Chair),  ESAW'09 (2008-2009, Chair).
He has also previously been member of the organization committees of the following events: ESAW (2004), JFSMA (2007), Web Intelligence Summer School (2009), EASSS (2010), MALLOW (2010), WI-IAT (2011). 
</p>

<p>
Gauthier Picard teaches <a href="http://www.emse.fr/~picard/cours/ai/">Artificial Intelligence</a>, Multi-Agent Systems and DCOPs for Master-level students for more than 10 years, at Ecole des Mines de Saint-Etienne. He is also coordinating the <a href="http://www.mines-stetienne.fr/cps2">International Master Track on Cyber-Physical and Social System</a>. Some sample slides and pratical works are available online, on <a href="http://www.emse.fr/~picard/cours/mas/lecture-DCSP-2015.pdf">DCSP and DCOP</a>, <a href="http://www.emse.fr/~picard/cours/3A/%20masterWI/dcsp/">Programming DCSP with Jason</a> or <a href="http://www.emse.fr/~picard/cours/3A/masterWI/coursSO.pdf">Self-organization in Multi-Agent Systems</a>.
</p>
</div>
</div>

<div id="outline-pierre" class="outline-3">
<h3 id="pierre"><a id="orgc492bf9"></a>Pierre Rust</h3>
<div class="outline-text-3" id="text-pierre">
<p>
<b>Pierre Rust</b> received his PhD in Computer Science from the University of Lyon in 2018. He is a software developer and computer science researcher, at Orange Labs. After more than 10 years of experience as a developer in the industry, he is now focusing on research; his main topics of interest are distributed computing, artificial intelligence and the impact of software on sustainability. He also enjoys helping fellow developers by sharing knowledge and occasionally giving lectures, notably at <a href="http://www.emse.fr/~picard/cours/iot">Mines Saint-Etienne</a>, and teaches Python language at Orange.
</p>
</div>
</div>
</div>
</div>
<div id="postamble" class="status">
<p class="author">Author: Gauthier Picard</p>
<p class="email">Email: <a href="mailto:gauthier.picard@emse.fr">gauthier.picard@emse.fr</a></p>
<p class="date">Created: 2020-05-27 Wed 14:56</p>
<p class="validation"><a href="http://validator.w3.org/check?uri=referer">Validate</a></p>
</div>
</body>
</html>
