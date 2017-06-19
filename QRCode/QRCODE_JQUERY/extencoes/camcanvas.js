


<!DOCTYPE html>
<html>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# githubog: http://ogp.me/ns/fb/githubog#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CamCanvas-API-/src/camcanvas.js at master · taboca/CamCanvas-API- · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png" />
    <link rel="logo" type="image/svg" href="https://github-media-downloads.s3.amazonaws.com/github-logo.svg" />
    <meta property="og:image" content="https://github.global.ssl.fastly.net/images/modules/logos_page/Octocat.png">
    <meta name="hostname" content="fe2.rs.github.com">
    <link rel="assets" href="https://github.global.ssl.fastly.net/">
    <link rel="xhr-socket" href="/_sockets" />
    
    


    <meta name="msapplication-TileImage" content="/windows-tile.png" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="selected-link" value="repo_source" data-pjax-transient />
    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="github" name="octolytics-app-id" />

    
    
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />

    <meta content="authenticity_token" name="csrf-param" />
<meta content="n5fpIEdF/66wgHUz7bcthFLfreQF9/+ApAxEN1CSA3g=" name="csrf-token" />

    <link href="https://github.global.ssl.fastly.net/assets/github-ad8bba1e22f69fcea2f2822cf877987d50a76547.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://github.global.ssl.fastly.net/assets/github2-02d8290450626963b8341bcf949ab6f840ed92b3.css" media="all" rel="stylesheet" type="text/css" />
    


      <script src="https://github.global.ssl.fastly.net/assets/frameworks-e8054ad804a1cf9e9849130fee5a4a5487b663ed.js" type="text/javascript"></script>
      <script src="https://github.global.ssl.fastly.net/assets/github-cda6393ee969e97594141e0ae56ec99033d51eed.js" type="text/javascript"></script>
      
      <meta http-equiv="x-pjax-version" content="ecd806e884c9decb6580027039e44105">

        <link data-pjax-transient rel='permalink' href='/taboca/CamCanvas-API-/blob/ad6b0d46eff228be6e9c60df6091e141ae850958/src/camcanvas.js'>
  <meta property="og:title" content="CamCanvas-API-"/>
  <meta property="og:type" content="githubog:gitrepository"/>
  <meta property="og:url" content="https://github.com/taboca/CamCanvas-API-"/>
  <meta property="og:image" content="https://github.global.ssl.fastly.net/images/gravatars/gravatar-user-420.png"/>
  <meta property="og:site_name" content="GitHub"/>
  <meta property="og:description" content="CamCanvas-API- - JavaScript API for Webcam image access using Canvas "/>

  <meta name="description" content="CamCanvas-API- - JavaScript API for Webcam image access using Canvas " />

  <meta content="8658" name="octolytics-dimension-user_id" /><meta content="taboca" name="octolytics-dimension-user_login" /><meta content="279318" name="octolytics-dimension-repository_id" /><meta content="taboca/CamCanvas-API-" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="279318" name="octolytics-dimension-repository_network_root_id" /><meta content="taboca/CamCanvas-API-" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/taboca/CamCanvas-API-/commits/master.atom" rel="alternate" title="Recent Commits to CamCanvas-API-:master" type="application/atom+xml" />

  </head>


  <body class="logged_out page-blob windows vis-public env-production ">

    <div class="wrapper">
      
      
      


      
      <div class="header header-logged-out">
  <div class="container clearfix">

    <a class="header-logo-wordmark" href="https://github.com/">
      <span class="mega-octicon octicon-logo-github"></span>
    </a>

    <div class="header-actions">
        <a class="button primary" href="/signup">Sign up</a>
      <a class="button" href="/login?return_to=%2Ftaboca%2FCamCanvas-API-%2Fblob%2Fmaster%2Fsrc%2Fcamcanvas.js">Sign in</a>
    </div>

    <div class="command-bar js-command-bar  in-repository">


      <ul class="top-nav">
          <li class="explore"><a href="/explore">Explore</a></li>
        <li class="features"><a href="/features">Features</a></li>
          <li class="enterprise"><a href="https://enterprise.github.com/">Enterprise</a></li>
          <li class="blog"><a href="/blog">Blog</a></li>
      </ul>
        <form accept-charset="UTF-8" action="/search" class="command-bar-form" id="top_search_form" method="get">

<input type="text" data-hotkey="/ s" name="q" id="js-command-bar-field" placeholder="Search or type a command" tabindex="1" autocapitalize="off"
    
    
      data-repo="taboca/CamCanvas-API-"
      data-branch="master"
      data-sha="486cea36e8224b3e857eef3600776bafb243b335"
  >

    <input type="hidden" name="nwo" value="taboca/CamCanvas-API-" />

    <div class="select-menu js-menu-container js-select-menu search-context-select-menu">
      <span class="minibutton select-menu-button js-menu-target">
        <span class="js-select-button">This repository</span>
      </span>

      <div class="select-menu-modal-holder js-menu-content js-navigation-container">
        <div class="select-menu-modal">

          <div class="select-menu-item js-navigation-item js-this-repository-navigation-item selected">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" class="js-search-this-repository" name="search_target" value="repository" checked="checked" />
            <div class="select-menu-item-text js-select-button-text">This repository</div>
          </div> <!-- /.select-menu-item -->

          <div class="select-menu-item js-navigation-item js-all-repositories-navigation-item">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" name="search_target" value="global" />
            <div class="select-menu-item-text js-select-button-text">All repositories</div>
          </div> <!-- /.select-menu-item -->

        </div>
      </div>
    </div>

  <span class="octicon help tooltipped downwards" title="Show command bar help">
    <span class="octicon octicon-question"></span>
  </span>


  <input type="hidden" name="ref" value="cmdform">

</form>
    </div>

  </div>
</div>


      


          <div class="site" itemscope itemtype="http://schema.org/WebPage">
    
    <div class="pagehead repohead instapaper_ignore readability-menu">
      <div class="container">
        

<ul class="pagehead-actions">


  <li>
  <a href="/login?return_to=%2Ftaboca%2FCamCanvas-API-"
  class="minibutton with-count js-toggler-target star-button entice tooltipped upwards "
  title="You must be signed in to use this feature" rel="nofollow">
  <span class="octicon octicon-star"></span>Star
</a>
<a class="social-count js-social-count" href="/taboca/CamCanvas-API-/stargazers">
  90
</a>

  </li>

    <li>
      <a href="/login?return_to=%2Ftaboca%2FCamCanvas-API-"
        class="minibutton with-count js-toggler-target fork-button entice tooltipped upwards"
        title="You must be signed in to fork a repository" rel="nofollow">
        <span class="octicon octicon-git-branch"></span>Fork
      </a>
      <a href="/taboca/CamCanvas-API-/network" class="social-count">
        22
      </a>
    </li>
</ul>

        <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
          <span class="repo-label"><span>public</span></span>
          <span class="mega-octicon octicon-repo"></span>
          <span class="author">
            <a href="/taboca" class="url fn" itemprop="url" rel="author"><span itemprop="title">taboca</span></a></span
          ><span class="repohead-name-divider">/</span><strong
          ><a href="/taboca/CamCanvas-API-" class="js-current-repository js-repo-home-link">CamCanvas-API-</a></strong>

          <span class="page-context-loader">
            <img alt="Octocat-spinner-32" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
          </span>

        </h1>
      </div><!-- /.container -->
    </div><!-- /.repohead -->

    <div class="container">

      <div class="repository-with-sidebar repo-container ">

        <div class="repository-sidebar">
            

<div class="repo-nav repo-nav-full js-repository-container-pjax js-octicon-loaders">
  <div class="repo-nav-contents">
    <ul class="repo-menu">
      <li class="tooltipped leftwards" title="Code">
        <a href="/taboca/CamCanvas-API-" aria-label="Code" class="js-selected-navigation-item selected" data-gotokey="c" data-pjax="true" data-selected-links="repo_source repo_downloads repo_commits repo_tags repo_branches /taboca/CamCanvas-API-">
          <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

        <li class="tooltipped leftwards" title="Issues">
          <a href="/taboca/CamCanvas-API-/issues" aria-label="Issues" class="js-selected-navigation-item js-disable-pjax" data-gotokey="i" data-selected-links="repo_issues /taboca/CamCanvas-API-/issues">
            <span class="octicon octicon-issue-opened"></span> <span class="full-word">Issues</span>
            <span class='counter'>6</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>        </li>

      <li class="tooltipped leftwards" title="Pull Requests"><a href="/taboca/CamCanvas-API-/pulls" aria-label="Pull Requests" class="js-selected-navigation-item js-disable-pjax" data-gotokey="p" data-selected-links="repo_pulls /taboca/CamCanvas-API-/pulls">
            <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull Requests</span>
            <span class='counter'>0</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>




    </ul>
    <div class="repo-menu-separator"></div>
    <ul class="repo-menu">

      <li class="tooltipped leftwards" title="Pulse">
        <a href="/taboca/CamCanvas-API-/pulse" aria-label="Pulse" class="js-selected-navigation-item " data-pjax="true" data-selected-links="pulse /taboca/CamCanvas-API-/pulse">
          <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped leftwards" title="Graphs">
        <a href="/taboca/CamCanvas-API-/graphs" aria-label="Graphs" class="js-selected-navigation-item " data-pjax="true" data-selected-links="repo_graphs repo_contributors /taboca/CamCanvas-API-/graphs">
          <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped leftwards" title="Network">
        <a href="/taboca/CamCanvas-API-/network" aria-label="Network" class="js-selected-navigation-item js-disable-pjax" data-selected-links="repo_network /taboca/CamCanvas-API-/network">
          <span class="octicon octicon-git-branch"></span> <span class="full-word">Network</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

    </ul>

  </div>
</div>

            <div class="only-with-full-nav">
              

  

<div class="clone-url open"
  data-protocol-type="http"
  data-url="/users/set_protocol?protocol_selector=http&amp;protocol_type=clone">
  <h3><strong>HTTPS</strong> clone URL</h3>

  <input type="text" class="clone js-url-field"
         value="https://github.com/taboca/CamCanvas-API-.git" readonly="readonly">

  <span class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="https://github.com/taboca/CamCanvas-API-.git" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
</div>

  

<div class="clone-url "
  data-protocol-type="subversion"
  data-url="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=clone">
  <h3><strong>Subversion</strong> checkout URL</h3>

  <input type="text" class="clone js-url-field"
         value="https://github.com/taboca/CamCanvas-API-" readonly="readonly">

  <span class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="https://github.com/taboca/CamCanvas-API-" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
</div>



<p class="clone-options">You can clone with
    <a href="#" class="js-clone-selector" data-protocol="http">HTTPS</a>,
    <a href="#" class="js-clone-selector" data-protocol="subversion">Subversion</a>,
  and <a href="https://help.github.com/articles/which-remote-url-should-i-use">other methods.</a>
</p>


  <a href="http://windows.github.com" class="minibutton sidebar-button">
    <span class="octicon octicon-device-desktop"></span>
    Clone in Desktop
  </a>

                <a href="/taboca/CamCanvas-API-/archive/master.zip"
                   class="minibutton sidebar-button"
                   title="Download this repository as a zip file"
                   rel="nofollow">
                  <span class="octicon octicon-cloud-download"></span>
                  Download ZIP
                </a>
            </div>
        </div><!-- /.repository-sidebar -->

        <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>
          


<!-- blob contrib key: blob_contributors:v21:cfc8d0065096af4d3170a3d714d1d192 -->
<!-- blob contrib frag key: views10/v8/blob_contributors:v21:cfc8d0065096af4d3170a3d714d1d192 -->

<p title="This is a placeholder element" class="js-history-link-replace hidden"></p>

<a href="/taboca/CamCanvas-API-/find/master" data-pjax data-hotkey="t" style="display:none">Show File Finder</a>

<div class="file-navigation">
  


<div class="select-menu js-menu-container js-select-menu" >
  <span class="minibutton select-menu-button js-menu-target" data-hotkey="w"
    data-master-branch="master"
    data-ref="master">
    <span class="octicon octicon-git-branch"></span>
    <i>branch:</i>
    <span class="js-select-button">master</span>
  </span>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax>

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span class="select-menu-title">Switch branches/tags</span>
        <span class="octicon octicon-remove-close js-menu-close"></span>
      </div> <!-- /.select-menu-header -->

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" class="js-select-menu-tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" class="js-select-menu-tab">Tags</a>
            </li>
          </ul>
        </div><!-- /.select-menu-tabs -->
      </div><!-- /.select-menu-filters -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item selected">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/taboca/CamCanvas-API-/blob/master/src/camcanvas.js" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="master" data-skip-pjax="true" rel="nofollow" title="master">master</a>
            </div> <!-- /.select-menu-item -->
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/taboca/CamCanvas-API-/blob/0.2/src/camcanvas.js" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="0.2" data-skip-pjax="true" rel="nofollow" title="0.2">0.2</a>
            </div> <!-- /.select-menu-item -->
        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

    </div> <!-- /.select-menu-modal -->
  </div> <!-- /.select-menu-modal-holder -->
</div> <!-- /.select-menu -->

  <div class="breadcrumb">
    <span class='repo-root js-repo-root'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/taboca/CamCanvas-API-" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">CamCanvas-API-</span></a></span></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/taboca/CamCanvas-API-/tree/master/src" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">src</span></a></span><span class="separator"> / </span><strong class="final-path">camcanvas.js</strong> <span class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="src/camcanvas.js" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>


  
  <div class="commit file-history-tease">
    <img class="main-avatar" height="24" src="https://secure.gravatar.com/avatar/b7561346b603a6c404a4227828e225e2?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
    <span class="author"><a href="/Marcio3" rel="author">Marcio3</a></span>
    <time class="js-relative-date" datetime="2013-01-15T17:42:22-08:00" title="2013-01-15 17:42:22">January 15, 2013</time>
    <div class="commit-title">
        <a href="/taboca/CamCanvas-API-/commit/a74cc3b60e803cac54a6f1f45e01ede047481fba" class="message" data-pjax="true" title="0.3 initial code">0.3 initial code</a>
    </div>

    <div class="participation">
      <p class="quickstat"><a href="#blob_contributors_box" rel="facebox"><strong>1</strong> contributor</a></p>
      
    </div>
    <div id="blob_contributors_box" style="display:none">
      <h2 class="facebox-header">Users who have contributed to this file</h2>
      <ul class="facebox-user-list">
        <li class="facebox-user-list-item">
          <img height="24" src="https://secure.gravatar.com/avatar/b7561346b603a6c404a4227828e225e2?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/Marcio3">Marcio3</a>
        </li>
      </ul>
    </div>
  </div>


<div id="files" class="bubble">
  <div class="file">
    <div class="meta">
      <div class="info">
        <span class="icon"><b class="octicon octicon-file-text"></b></span>
        <span class="mode" title="File Mode">file</span>
          <span>121 lines (104 sloc)</span>
        <span>3.354 kb</span>
      </div>
      <div class="actions">
        <div class="button-group">
              <a class="minibutton js-entice" href=""
                 data-entice="You must be signed in and on a branch to make or propose changes">Edit</a>
          <a href="/taboca/CamCanvas-API-/raw/master/src/camcanvas.js" class="button minibutton " id="raw-url">Raw</a>
            <a href="/taboca/CamCanvas-API-/blame/master/src/camcanvas.js" class="button minibutton ">Blame</a>
          <a href="/taboca/CamCanvas-API-/commits/master/src/camcanvas.js" class="button minibutton " rel="nofollow">History</a>
        </div><!-- /.button-group -->
            <a class="minibutton danger empty-icon js-entice" href=""
               data-entice="You must be signed in and on a branch to make or propose changes">
            Delete
          </a>
      </div><!-- /.actions -->

    </div>
        <div class="blob-wrapper data type-javascript js-blob-data">
      <table class="file-code file-diff">
        <tr class="file-code-line">
          <td class="blob-line-nums">
            <span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
<span id="L35" rel="#L35">35</span>
<span id="L36" rel="#L36">36</span>
<span id="L37" rel="#L37">37</span>
<span id="L38" rel="#L38">38</span>
<span id="L39" rel="#L39">39</span>
<span id="L40" rel="#L40">40</span>
<span id="L41" rel="#L41">41</span>
<span id="L42" rel="#L42">42</span>
<span id="L43" rel="#L43">43</span>
<span id="L44" rel="#L44">44</span>
<span id="L45" rel="#L45">45</span>
<span id="L46" rel="#L46">46</span>
<span id="L47" rel="#L47">47</span>
<span id="L48" rel="#L48">48</span>
<span id="L49" rel="#L49">49</span>
<span id="L50" rel="#L50">50</span>
<span id="L51" rel="#L51">51</span>
<span id="L52" rel="#L52">52</span>
<span id="L53" rel="#L53">53</span>
<span id="L54" rel="#L54">54</span>
<span id="L55" rel="#L55">55</span>
<span id="L56" rel="#L56">56</span>
<span id="L57" rel="#L57">57</span>
<span id="L58" rel="#L58">58</span>
<span id="L59" rel="#L59">59</span>
<span id="L60" rel="#L60">60</span>
<span id="L61" rel="#L61">61</span>
<span id="L62" rel="#L62">62</span>
<span id="L63" rel="#L63">63</span>
<span id="L64" rel="#L64">64</span>
<span id="L65" rel="#L65">65</span>
<span id="L66" rel="#L66">66</span>
<span id="L67" rel="#L67">67</span>
<span id="L68" rel="#L68">68</span>
<span id="L69" rel="#L69">69</span>
<span id="L70" rel="#L70">70</span>
<span id="L71" rel="#L71">71</span>
<span id="L72" rel="#L72">72</span>
<span id="L73" rel="#L73">73</span>
<span id="L74" rel="#L74">74</span>
<span id="L75" rel="#L75">75</span>
<span id="L76" rel="#L76">76</span>
<span id="L77" rel="#L77">77</span>
<span id="L78" rel="#L78">78</span>
<span id="L79" rel="#L79">79</span>
<span id="L80" rel="#L80">80</span>
<span id="L81" rel="#L81">81</span>
<span id="L82" rel="#L82">82</span>
<span id="L83" rel="#L83">83</span>
<span id="L84" rel="#L84">84</span>
<span id="L85" rel="#L85">85</span>
<span id="L86" rel="#L86">86</span>
<span id="L87" rel="#L87">87</span>
<span id="L88" rel="#L88">88</span>
<span id="L89" rel="#L89">89</span>
<span id="L90" rel="#L90">90</span>
<span id="L91" rel="#L91">91</span>
<span id="L92" rel="#L92">92</span>
<span id="L93" rel="#L93">93</span>
<span id="L94" rel="#L94">94</span>
<span id="L95" rel="#L95">95</span>
<span id="L96" rel="#L96">96</span>
<span id="L97" rel="#L97">97</span>
<span id="L98" rel="#L98">98</span>
<span id="L99" rel="#L99">99</span>
<span id="L100" rel="#L100">100</span>
<span id="L101" rel="#L101">101</span>
<span id="L102" rel="#L102">102</span>
<span id="L103" rel="#L103">103</span>
<span id="L104" rel="#L104">104</span>
<span id="L105" rel="#L105">105</span>
<span id="L106" rel="#L106">106</span>
<span id="L107" rel="#L107">107</span>
<span id="L108" rel="#L108">108</span>
<span id="L109" rel="#L109">109</span>
<span id="L110" rel="#L110">110</span>
<span id="L111" rel="#L111">111</span>
<span id="L112" rel="#L112">112</span>
<span id="L113" rel="#L113">113</span>
<span id="L114" rel="#L114">114</span>
<span id="L115" rel="#L115">115</span>
<span id="L116" rel="#L116">116</span>
<span id="L117" rel="#L117">117</span>
<span id="L118" rel="#L118">118</span>
<span id="L119" rel="#L119">119</span>
<span id="L120" rel="#L120">120</span>

          </td>
          <td class="blob-line-code">
                  <div class="highlight"><pre><div class='line' id='LC1'><span class="kd">var</span> <span class="nx">requestAnimationFrame</span> <span class="o">=</span> <span class="nb">window</span><span class="p">.</span><span class="nx">requestAnimationFrame</span> <span class="o">||</span> <span class="nb">window</span><span class="p">.</span><span class="nx">mozRequestAnimationFrame</span> <span class="o">||</span> <span class="nb">window</span><span class="p">.</span><span class="nx">webkitRequestAnimationFrame</span> <span class="o">||</span> <span class="nb">window</span><span class="p">.</span><span class="nx">msRequestAnimationFrame</span><span class="p">;</span></div><div class='line' id='LC2'><span class="nb">window</span><span class="p">.</span><span class="nx">requestAnimationFrame</span> <span class="o">=</span> <span class="nx">requestAnimationFrame</span><span class="p">;</span></div><div class='line' id='LC3'><br/></div><div class='line' id='LC4'><span class="kd">var</span> <span class="nx">v</span><span class="p">,</span> <span class="nx">canvas</span><span class="p">,</span> <span class="nx">gCtx</span><span class="p">,</span> <span class="nx">pixelOperationFunction</span><span class="o">=</span><span class="nx">passEmboss</span><span class="p">;</span></div><div class='line' id='LC5'><span class="kd">var</span> <span class="nx">backBuffer</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">createElement</span><span class="p">(</span><span class="s1">&#39;canvas&#39;</span><span class="p">);</span></div><div class='line' id='LC6'><span class="kd">var</span> <span class="nx">bCtx</span> <span class="o">=</span> <span class="nx">backBuffer</span><span class="p">.</span><span class="nx">getContext</span><span class="p">(</span><span class="s1">&#39;2d&#39;</span><span class="p">);</span></div><div class='line' id='LC7'><br/></div><div class='line' id='LC8'><span class="kd">function</span> <span class="nx">setFunction</span> <span class="p">(</span><span class="nx">fName</span><span class="p">)</span> <span class="p">{</span> </div><div class='line' id='LC9'>	<span class="nx">pixelOperationFunction</span><span class="o">=</span><span class="nx">fName</span><span class="p">;</span></div><div class='line' id='LC10'><span class="p">}</span> </div><div class='line' id='LC11'><br/></div><div class='line' id='LC12'><span class="kd">function</span> <span class="nx">init</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC13'>&nbsp;&nbsp;<span class="nx">v</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">&#39;v&#39;</span><span class="p">);</span></div><div class='line' id='LC14'>&nbsp;&nbsp;<span class="nx">canvas</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">&#39;c&#39;</span><span class="p">);</span></div><div class='line' id='LC15'>&nbsp;&nbsp;<span class="nx">gCtx</span> <span class="o">=</span> <span class="nx">canvas</span><span class="p">.</span><span class="nx">getContext</span><span class="p">(</span><span class="s1">&#39;2d&#39;</span><span class="p">);</span></div><div class='line' id='LC16'>&nbsp;&nbsp;<span class="nx">navigator</span><span class="p">.</span><span class="nx">webkitGetUserMedia</span><span class="p">({</span><span class="nx">video</span><span class="o">:</span><span class="kc">true</span><span class="p">},</span> <span class="nx">callbackStreamIsReady</span><span class="p">);</span></div><div class='line' id='LC17'><span class="p">}</span></div><div class='line' id='LC18'><br/></div><div class='line' id='LC19'><span class="kd">function</span> <span class="nx">callbackStreamIsReady</span><span class="p">(</span><span class="nx">stream</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC20'>&nbsp;&nbsp;<span class="nx">v</span><span class="p">.</span><span class="nx">src</span> <span class="o">=</span> <span class="nx">URL</span><span class="p">.</span><span class="nx">createObjectURL</span><span class="p">(</span><span class="nx">stream</span><span class="p">);</span></div><div class='line' id='LC21'>&nbsp;&nbsp;<span class="nx">v</span><span class="p">.</span><span class="nx">play</span><span class="p">();</span></div><div class='line' id='LC22'>&nbsp;&nbsp;<span class="nb">window</span><span class="p">.</span><span class="nx">requestAnimationFrame</span><span class="p">(</span><span class="nx">draw</span><span class="p">);</span></div><div class='line' id='LC23'><span class="p">}</span></div><div class='line' id='LC24'><br/></div><div class='line' id='LC25'><span class="kd">function</span> <span class="nx">draw</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC26'>&nbsp;&nbsp;<span class="kd">var</span> <span class="nx">w</span> <span class="o">=</span> <span class="nx">canvas</span><span class="p">.</span><span class="nx">clientWidth</span><span class="p">;</span></div><div class='line' id='LC27'>&nbsp;&nbsp;<span class="kd">var</span> <span class="nx">h</span> <span class="o">=</span> <span class="nx">canvas</span><span class="p">.</span><span class="nx">clientHeight</span><span class="p">;</span></div><div class='line' id='LC28'>&nbsp;&nbsp;<span class="nx">backBuffer</span><span class="p">.</span><span class="nx">width</span> <span class="o">=</span> <span class="nx">w</span><span class="p">;</span></div><div class='line' id='LC29'>&nbsp;&nbsp;<span class="nx">backBuffer</span><span class="p">.</span><span class="nx">height</span> <span class="o">=</span> <span class="nx">h</span><span class="p">;</span></div><div class='line' id='LC30'>&nbsp;&nbsp;<span class="nx">bCtx</span><span class="p">.</span><span class="nx">drawImage</span><span class="p">(</span><span class="nx">v</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="nx">w</span><span class="p">,</span> <span class="nx">h</span><span class="p">);</span></div><div class='line' id='LC31'>&nbsp;&nbsp;<span class="nx">pixelOperationFunction</span><span class="p">(</span><span class="nx">w</span><span class="p">,</span><span class="nx">h</span><span class="p">);</span></div><div class='line' id='LC32'>&nbsp;&nbsp;<span class="nb">window</span><span class="p">.</span><span class="nx">requestAnimationFrame</span><span class="p">(</span><span class="nx">draw</span><span class="p">);</span></div><div class='line' id='LC33'><span class="p">}</span></div><div class='line' id='LC34'><br/></div><div class='line' id='LC35'><span class="kd">function</span> <span class="nx">passInverse</span><span class="p">(</span><span class="nx">w</span><span class="p">,</span><span class="nx">h</span><span class="p">)</span> <span class="p">{</span> </div><div class='line' id='LC36'>&nbsp;&nbsp;&nbsp;<span class="kd">var</span> <span class="nx">pixels</span> <span class="o">=</span> <span class="nx">bCtx</span><span class="p">.</span><span class="nx">getImageData</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="nx">w</span><span class="p">,</span> <span class="nx">h</span><span class="p">);</span></div><div class='line' id='LC37'>&nbsp;&nbsp;&nbsp;<span class="kd">var</span> <span class="nx">pixelData</span> <span class="o">=</span> <span class="nx">pixels</span><span class="p">.</span><span class="nx">data</span><span class="p">;</span></div><div class='line' id='LC38'>&nbsp;&nbsp;&nbsp;<span class="k">for</span> <span class="p">(</span><span class="kd">var</span> <span class="nx">i</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span> <span class="nx">i</span> <span class="o">&lt;</span> <span class="nx">pixelData</span><span class="p">.</span><span class="nx">length</span><span class="p">;</span> <span class="nx">i</span><span class="o">+=</span><span class="mi">4</span><span class="p">)</span> <span class="p">{</span> </div><div class='line' id='LC39'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//pixelData.data[i+0]=r;</span></div><div class='line' id='LC40'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="kd">var</span> <span class="nx">rr</span> <span class="o">=</span> <span class="nx">pixelData</span><span class="p">[</span><span class="nx">i</span><span class="o">+</span><span class="mi">0</span><span class="p">];</span></div><div class='line' id='LC41'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="kd">var</span> <span class="nx">gg</span> <span class="o">=</span> <span class="nx">pixelData</span><span class="p">[</span><span class="nx">i</span><span class="o">+</span><span class="mi">1</span><span class="p">];</span></div><div class='line' id='LC42'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="kd">var</span> <span class="nx">bb</span> <span class="o">=</span> <span class="nx">pixelData</span><span class="p">[</span><span class="nx">i</span><span class="o">+</span><span class="mi">2</span><span class="p">];</span></div><div class='line' id='LC43'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="kd">var</span> <span class="nx">average</span> <span class="o">=</span> <span class="nb">parseInt</span><span class="p">((</span><span class="nx">rr</span><span class="o">+</span><span class="nx">gg</span><span class="o">+</span><span class="nx">bb</span><span class="p">)</span><span class="o">/</span><span class="mi">3</span><span class="p">);</span></div><div class='line' id='LC44'><br/></div><div class='line' id='LC45'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="kd">var</span> <span class="nx">diffMedia</span> <span class="o">=</span> <span class="mi">255</span><span class="o">-</span><span class="nx">average</span><span class="p">;</span> </div><div class='line' id='LC46'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">average</span> <span class="o">=</span> <span class="nx">diffMedia</span><span class="p">;</span> </div><div class='line' id='LC47'><br/></div><div class='line' id='LC48'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">pixelData</span><span class="p">[</span><span class="nb">parseInt</span><span class="p">(</span><span class="nx">i</span><span class="o">+</span><span class="mi">0</span><span class="p">)]</span><span class="o">=</span><span class="nx">average</span><span class="p">;</span></div><div class='line' id='LC49'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">pixelData</span><span class="p">[</span><span class="nb">parseInt</span><span class="p">(</span><span class="nx">i</span><span class="o">+</span><span class="mi">1</span><span class="p">)]</span><span class="o">=</span><span class="nx">average</span><span class="p">;</span></div><div class='line' id='LC50'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">pixelData</span><span class="p">[</span><span class="nb">parseInt</span><span class="p">(</span><span class="nx">i</span><span class="o">+</span><span class="mi">2</span><span class="p">)]</span><span class="o">=</span><span class="nx">average</span><span class="p">;</span></div><div class='line' id='LC51'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">pixelData</span><span class="p">[</span><span class="nb">parseInt</span><span class="p">(</span><span class="nx">i</span><span class="o">+</span><span class="mi">3</span><span class="p">)]</span><span class="o">=</span><span class="mi">255</span><span class="p">;</span></div><div class='line' id='LC52'>&nbsp;&nbsp;&nbsp;<span class="p">}</span> </div><div class='line' id='LC53'>&nbsp;&nbsp;&nbsp;<span class="nx">pixels</span><span class="p">.</span><span class="nx">data</span> <span class="o">=</span> <span class="nx">pixelData</span><span class="p">;</span></div><div class='line' id='LC54'>&nbsp;&nbsp;&nbsp;<span class="nx">gCtx</span><span class="p">.</span><span class="nx">putImageData</span><span class="p">(</span><span class="nx">pixels</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">0</span><span class="p">);</span></div><div class='line' id='LC55'><span class="p">}</span> </div><div class='line' id='LC56'><br/></div><div class='line' id='LC57'><span class="kd">function</span> <span class="nx">passGray</span><span class="p">(</span><span class="nx">w</span><span class="p">,</span><span class="nx">h</span><span class="p">)</span> <span class="p">{</span> </div><div class='line' id='LC58'>&nbsp;&nbsp;&nbsp;<span class="kd">var</span> <span class="nx">pixels</span> <span class="o">=</span> <span class="nx">bCtx</span><span class="p">.</span><span class="nx">getImageData</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="nx">w</span><span class="p">,</span> <span class="nx">h</span><span class="p">);</span></div><div class='line' id='LC59'>&nbsp;&nbsp;&nbsp;<span class="kd">var</span> <span class="nx">pixelData</span> <span class="o">=</span> <span class="nx">pixels</span><span class="p">.</span><span class="nx">data</span><span class="p">;</span></div><div class='line' id='LC60'>&nbsp;&nbsp;&nbsp;<span class="k">for</span> <span class="p">(</span><span class="kd">var</span> <span class="nx">i</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span> <span class="nx">i</span> <span class="o">&lt;</span> <span class="nx">pixelData</span><span class="p">.</span><span class="nx">length</span><span class="p">;</span> <span class="nx">i</span><span class="o">+=</span><span class="mi">4</span><span class="p">)</span> <span class="p">{</span> </div><div class='line' id='LC61'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//pixelData.data[i+0]=r;</span></div><div class='line' id='LC62'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="kd">var</span> <span class="nx">rr</span> <span class="o">=</span> <span class="nx">pixelData</span><span class="p">[</span><span class="nx">i</span><span class="o">+</span><span class="mi">0</span><span class="p">];</span></div><div class='line' id='LC63'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="kd">var</span> <span class="nx">gg</span> <span class="o">=</span> <span class="nx">pixelData</span><span class="p">[</span><span class="nx">i</span><span class="o">+</span><span class="mi">1</span><span class="p">];</span></div><div class='line' id='LC64'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="kd">var</span> <span class="nx">bb</span> <span class="o">=</span> <span class="nx">pixelData</span><span class="p">[</span><span class="nx">i</span><span class="o">+</span><span class="mi">2</span><span class="p">];</span></div><div class='line' id='LC65'><br/></div><div class='line' id='LC66'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="kd">var</span> <span class="nx">average</span> <span class="o">=</span> <span class="nb">parseInt</span><span class="p">((</span><span class="nx">rr</span><span class="o">+</span><span class="nx">gg</span><span class="o">+</span><span class="nx">bb</span><span class="p">)</span><span class="o">/</span><span class="mi">3</span><span class="p">);</span></div><div class='line' id='LC67'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">pixelData</span><span class="p">[</span><span class="nb">parseInt</span><span class="p">(</span><span class="nx">i</span><span class="o">+</span><span class="mi">0</span><span class="p">)]</span><span class="o">=</span><span class="nx">average</span><span class="p">;</span></div><div class='line' id='LC68'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">pixelData</span><span class="p">[</span><span class="nb">parseInt</span><span class="p">(</span><span class="nx">i</span><span class="o">+</span><span class="mi">1</span><span class="p">)]</span><span class="o">=</span><span class="nx">average</span><span class="p">;</span></div><div class='line' id='LC69'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">pixelData</span><span class="p">[</span><span class="nb">parseInt</span><span class="p">(</span><span class="nx">i</span><span class="o">+</span><span class="mi">2</span><span class="p">)]</span><span class="o">=</span><span class="nx">average</span><span class="p">;</span></div><div class='line' id='LC70'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">pixelData</span><span class="p">[</span><span class="nb">parseInt</span><span class="p">(</span><span class="nx">i</span><span class="o">+</span><span class="mi">3</span><span class="p">)]</span><span class="o">=</span><span class="mi">255</span><span class="p">;</span></div><div class='line' id='LC71'>&nbsp;&nbsp;&nbsp;<span class="p">}</span> </div><div class='line' id='LC72'>&nbsp;&nbsp;&nbsp;<span class="nx">pixels</span><span class="p">.</span><span class="nx">data</span> <span class="o">=</span> <span class="nx">pixelData</span><span class="p">;</span></div><div class='line' id='LC73'>&nbsp;&nbsp;&nbsp;<span class="nx">gCtx</span><span class="p">.</span><span class="nx">putImageData</span><span class="p">(</span><span class="nx">pixels</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">0</span><span class="p">);</span></div><div class='line' id='LC74'><span class="p">}</span> </div><div class='line' id='LC75'><br/></div><div class='line' id='LC76'><span class="kd">function</span> <span class="nx">passNormal</span><span class="p">(</span><span class="nx">w</span><span class="p">,</span><span class="nx">h</span><span class="p">)</span> <span class="p">{</span> </div><div class='line' id='LC77'>&nbsp;&nbsp;&nbsp;<span class="kd">var</span> <span class="nx">pixels</span> <span class="o">=</span> <span class="nx">bCtx</span><span class="p">.</span><span class="nx">getImageData</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="nx">w</span><span class="p">,</span> <span class="nx">h</span><span class="p">);</span></div><div class='line' id='LC78'>&nbsp;&nbsp;&nbsp;<span class="nx">gCtx</span><span class="p">.</span><span class="nx">putImageData</span><span class="p">(</span><span class="nx">pixels</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">0</span><span class="p">);</span></div><div class='line' id='LC79'><span class="p">}</span> </div><div class='line' id='LC80'><br/></div><div class='line' id='LC81'><span class="kd">function</span> <span class="nx">passRed</span><span class="p">(</span><span class="nx">w</span><span class="p">,</span><span class="nx">h</span><span class="p">)</span> <span class="p">{</span> </div><div class='line' id='LC82'>&nbsp;&nbsp;&nbsp;<span class="kd">var</span> <span class="nx">pixels</span> <span class="o">=</span> <span class="nx">bCtx</span><span class="p">.</span><span class="nx">getImageData</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="nx">w</span><span class="p">,</span> <span class="nx">h</span><span class="p">);</span></div><div class='line' id='LC83'>&nbsp;&nbsp;&nbsp;<span class="kd">var</span> <span class="nx">pixelData</span> <span class="o">=</span> <span class="nx">pixels</span><span class="p">.</span><span class="nx">data</span><span class="p">;</span></div><div class='line' id='LC84'>&nbsp;&nbsp;&nbsp;<span class="k">for</span> <span class="p">(</span><span class="kd">var</span> <span class="nx">i</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span> <span class="nx">i</span> <span class="o">&lt;</span> <span class="nx">pixelData</span><span class="p">.</span><span class="nx">length</span><span class="p">;</span> <span class="nx">i</span><span class="o">+=</span><span class="mi">4</span><span class="p">)</span> <span class="p">{</span> </div><div class='line' id='LC85'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//pixelData.data[i+0]=r;</span></div><div class='line' id='LC86'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">pixelData</span><span class="p">[</span><span class="nb">parseInt</span><span class="p">(</span><span class="nx">i</span><span class="o">+</span><span class="mi">1</span><span class="p">)]</span><span class="o">=</span><span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC87'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">pixelData</span><span class="p">[</span><span class="nb">parseInt</span><span class="p">(</span><span class="nx">i</span><span class="o">+</span><span class="mi">2</span><span class="p">)]</span><span class="o">=</span><span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC88'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">pixelData</span><span class="p">[</span><span class="nb">parseInt</span><span class="p">(</span><span class="nx">i</span><span class="o">+</span><span class="mi">3</span><span class="p">)]</span><span class="o">=</span><span class="mi">255</span><span class="p">;</span></div><div class='line' id='LC89'>&nbsp;&nbsp;&nbsp;<span class="p">}</span> </div><div class='line' id='LC90'>&nbsp;&nbsp;&nbsp;<span class="nx">pixels</span><span class="p">.</span><span class="nx">data</span> <span class="o">=</span> <span class="nx">pixelData</span><span class="p">;</span></div><div class='line' id='LC91'>&nbsp;&nbsp;&nbsp;<span class="nx">gCtx</span><span class="p">.</span><span class="nx">putImageData</span><span class="p">(</span><span class="nx">pixels</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">0</span><span class="p">);</span></div><div class='line' id='LC92'><span class="p">}</span> </div><div class='line' id='LC93'><br/></div><div class='line' id='LC94'><span class="kd">function</span> <span class="nx">passEmboss</span><span class="p">(</span><span class="nx">w</span><span class="p">,</span><span class="nx">h</span><span class="p">)</span> <span class="p">{</span> </div><div class='line' id='LC95'>&nbsp;&nbsp;&nbsp;<span class="kd">var</span> <span class="nx">pixels</span> <span class="o">=</span> <span class="nx">bCtx</span><span class="p">.</span><span class="nx">getImageData</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="nx">w</span><span class="p">,</span> <span class="nx">h</span><span class="p">);</span></div><div class='line' id='LC96'>&nbsp;&nbsp;&nbsp;<span class="kd">var</span> <span class="nx">pixelData</span> <span class="o">=</span> <span class="nx">pixels</span><span class="p">.</span><span class="nx">data</span><span class="p">;</span></div><div class='line' id='LC97'>&nbsp;&nbsp;&nbsp;<span class="k">for</span> <span class="p">(</span><span class="kd">var</span> <span class="nx">i</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span> <span class="nx">i</span> <span class="o">&lt;</span> <span class="nx">pixelData</span><span class="p">.</span><span class="nx">length</span><span class="p">;</span> <span class="nx">i</span><span class="o">+=</span><span class="mi">4</span><span class="p">)</span> <span class="p">{</span> </div><div class='line' id='LC98'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//pixelData.data[i+0]=r;</span></div><div class='line' id='LC99'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="kd">var</span> <span class="nx">rr</span> <span class="o">=</span> <span class="nx">pixelData</span><span class="p">[</span><span class="nx">i</span><span class="o">+</span><span class="mi">0</span><span class="p">];</span></div><div class='line' id='LC100'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="kd">var</span> <span class="nx">gg</span> <span class="o">=</span> <span class="nx">pixelData</span><span class="p">[</span><span class="nx">i</span><span class="o">+</span><span class="mi">1</span><span class="p">];</span></div><div class='line' id='LC101'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="kd">var</span> <span class="nx">bb</span> <span class="o">=</span> <span class="nx">pixelData</span><span class="p">[</span><span class="nx">i</span><span class="o">+</span><span class="mi">2</span><span class="p">];</span></div><div class='line' id='LC102'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="kd">var</span> <span class="nx">average</span> <span class="o">=</span> <span class="nb">parseInt</span><span class="p">((</span><span class="nx">rr</span><span class="o">+</span><span class="nx">gg</span><span class="o">+</span><span class="nx">bb</span><span class="p">)</span><span class="o">/</span><span class="mi">3</span><span class="p">);</span></div><div class='line' id='LC103'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nx">i</span><span class="o">&gt;</span><span class="mi">7</span><span class="p">)</span> <span class="p">{</span> </div><div class='line' id='LC104'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">mOld</span> <span class="o">=</span> <span class="nx">pixelData</span><span class="p">[</span><span class="nx">i</span><span class="o">-</span><span class="mi">8</span><span class="o">+</span><span class="mi">0</span><span class="p">];</span></div><div class='line' id='LC105'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">mOld</span> <span class="o">=</span> <span class="nx">pixelData</span><span class="p">[</span><span class="nx">i</span><span class="o">-</span><span class="mi">8</span><span class="o">+</span><span class="mi">1</span><span class="p">];</span></div><div class='line' id='LC106'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">mOld</span> <span class="o">=</span> <span class="nx">pixelData</span><span class="p">[</span><span class="nx">i</span><span class="o">-</span><span class="mi">8</span><span class="o">+</span><span class="mi">2</span><span class="p">];</span></div><div class='line' id='LC107'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="kd">var</span> <span class="nx">diffMedia</span> <span class="o">=</span> <span class="mi">255</span><span class="o">-</span><span class="nx">average</span><span class="p">;</span> </div><div class='line' id='LC108'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">average</span> <span class="o">=</span> <span class="nx">diffMedia</span><span class="p">;</span> </div><div class='line' id='LC109'><br/></div><div class='line' id='LC110'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">mNew</span> <span class="o">=</span> <span class="nb">parseInt</span><span class="p">((</span><span class="nx">mOld</span> <span class="o">+</span> <span class="nx">average</span> <span class="p">)</span><span class="o">/</span> <span class="mi">2</span><span class="p">);</span></div><div class='line' id='LC111'><br/></div><div class='line' id='LC112'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">pixelData</span><span class="p">[</span><span class="nx">i</span><span class="o">-</span><span class="mi">8</span><span class="o">+</span><span class="mi">0</span><span class="p">]</span><span class="o">=</span><span class="nx">mNew</span><span class="p">;</span></div><div class='line' id='LC113'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">pixelData</span><span class="p">[</span><span class="nx">i</span><span class="o">-</span><span class="mi">8</span><span class="o">+</span><span class="mi">1</span><span class="p">]</span><span class="o">=</span><span class="nx">mNew</span><span class="p">;</span></div><div class='line' id='LC114'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">pixelData</span><span class="p">[</span><span class="nx">i</span><span class="o">-</span><span class="mi">8</span><span class="o">+</span><span class="mi">2</span><span class="p">]</span><span class="o">=</span><span class="nx">mNew</span><span class="p">;</span></div><div class='line' id='LC115'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC116'>&nbsp;&nbsp;&nbsp;<span class="p">}</span> </div><div class='line' id='LC117'>&nbsp;&nbsp;&nbsp;<span class="nx">pixels</span><span class="p">.</span><span class="nx">data</span> <span class="o">=</span> <span class="nx">pixelData</span><span class="p">;</span></div><div class='line' id='LC118'>&nbsp;&nbsp;&nbsp;<span class="nx">gCtx</span><span class="p">.</span><span class="nx">putImageData</span><span class="p">(</span><span class="nx">pixels</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">0</span><span class="p">);</span></div><div class='line' id='LC119'><span class="p">}</span> </div><div class='line' id='LC120'><br/></div></pre></div>
          </td>
        </tr>
      </table>
  </div>

  </div>
</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" class="js-jump-to-line" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <form accept-charset="UTF-8" class="js-jump-to-line-form">
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" autofocus>
    <button type="submit" class="button">Go</button>
  </form>
</div>

        </div>

      </div><!-- /.repo-container -->
      <div class="modal-backdrop"></div>
    </div><!-- /.container -->
  </div><!-- /.site -->


    </div><!-- /.wrapper -->

      <div class="container">
  <div class="site-footer">
    <ul class="site-footer-links right">
      <li><a href="https://status.github.com/">Status</a></li>
      <li><a href="http://developer.github.com">API</a></li>
      <li><a href="http://training.github.com">Training</a></li>
      <li><a href="http://shop.github.com">Shop</a></li>
      <li><a href="/blog">Blog</a></li>
      <li><a href="/about">About</a></li>

    </ul>

    <a href="/">
      <span class="mega-octicon octicon-mark-github"></span>
    </a>

    <ul class="site-footer-links">
      <li>&copy; 2013 <span title="0.09561s from fe2.rs.github.com">GitHub</span>, Inc.</li>
        <li><a href="/site/terms">Terms</a></li>
        <li><a href="/site/privacy">Privacy</a></li>
        <li><a href="/security">Security</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
  </div><!-- /.site-footer -->
</div><!-- /.container -->


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-fullscreen-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="js-fullscreen-contents" placeholder="" data-suggester="fullscreen_suggester"></textarea>
          <div class="suggester-container">
              <div class="suggester fullscreen-suggester js-navigation-container" id="fullscreen_suggester"
                 data-url="/taboca/CamCanvas-API-/suggestions/commit">
              </div>
          </div>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped leftwards" title="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped leftwards"
      title="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <a href="#" class="octicon octicon-remove-close close ajax-error-dismiss"></a>
      Something went wrong with that request. Please try again.
    </div>

    
  </body>
</html>

