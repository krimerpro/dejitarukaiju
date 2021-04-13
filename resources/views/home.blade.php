@extends('layouts.default')
@section('content')

<!-- //////////////////////////////////// CONTAINER ////////////////////////////////////-->
<div class="content-wrapper">
  <div class="content-body">
    <main><!-- Header: 3D Animation -->
<section class="head-area" id="head-area">
<div id="particles-js"></div>
<div class="head-content d-flex align-items-center">
    <div class="container">
        <div class="banner-wrapper">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="banner-content pt-5">
                        <h1 class="best-template animated" data-animation="fadeInUpShorter" data-animation-delay="1.5s">WINCAT Token</h1>
                        <h3 class="d-block white animated" data-animation="fadeInUpShorter" data-animation-delay="1.6s">The Next Generation of NFT Marketplace</h3>
                        <div class="mt-5">
                            <a href="https://exchange.pancakeswap.finance/#/swap?inputCurrency=0xd8e9d1183cde925d292586d699fa34848107830a" class="btn btn-lg btn-gradient-purple btn-glow mr-4 mb-2 animated" data-animation="fadeInUpShorter" data-animation-delay="1.7s">Buy on PancakeSwap</a>
                            <a href="https://bscscan.com/token/0xd8e9d1183cde925d292586d699fa34848107830a#balances" class="btn btn-lg btn-gradient-purple btn-glow mb-2 animated" data-animation="fadeInUpShorter" data-animation-delay="1.8s">BscScan Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 move-first">
                    <div id="svg-animation">
                        <img src="{{ asset('images/logo.jpeg') }}" style="width:75%;height:75%;border-radius:50%;display: block;margin-left: auto;margin-right: auto;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--/ Header: 3D Animation -->

<!-- Tokenomics -->
<section class="about section-padding" id="tokenomics">
<div class="container">
    <div class="heading text-center">
        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
            <h6 class="sub-title">Tokenomics</h6>
            <h2 class="title">Tokenomics</h2>
        </div>
    </div>
    <div class="content-area" style="color:#ffffff">
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px">Token Symbol</h3>
                    <h4 style="font-size:24px">WINCAT</h4>
                </div>

                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px">Max Supply</h3>
                    <h4 style="font-size:24px">1 Quadrillion</h4>
                </div>

                <div style="margin-bottom:15px;">
                    <h3 style="font-size:16px">Decimals</h3>
                    <h4 style="font-size:24px">18</h4>
                </div>
            </div>

            <div class="col-md-8 col-lg-8">
                <div style="margin-bottom:15px">
                    <p style="color:#ffffff;text-align:center">Total WINCAT Token Will be burn 650 Trillion tokens</p>

                    <div class="row">
                      <div class="col-md-1 col-lg-1">&nbsp;</div>

                      <div class="col-md-5 col-lg-5">
                          <p style="color:#ffffff">Initial Burn 200 Trillion tokens</p>
                          <p style="color:#ffffff">5K Holders Burn 50 Trillion tokens</p>
                          <p style="color:#ffffff">10K Holders Burn 100 Trillion tokens</p>
                      </div>

                      <div class="col-md-5 col-lg-5">
                          <p style="color:#ffffff">20K Holders Burn 100 Trillion tokens</p>
                          <p style="color:#ffffff">30K Holders Burn 100 Trillion tokens</p>
                          <p style="color:#ffffff">50K Holders Burn 100 Trillion tokens</p>
                      </div>

                      <div class="col-md-1 col-lg-1">&nbsp;</div>
                  </div>

                </div>
            </div>
        </div>

        <div class="row">
          <div class="col-md-4 col-lg-4">&nbsp;</div>

          <div class="col-md-8 col-lg-8">
              <div style="text-align:center">
                  <h3 style="font-size:16px;">Smart Contract | BSC</h3>
              </div>

              <div class="row" style="border:dashed;">
                <div class="col-md-1 col-lg-1">&nbsp;</div>
                  <div class="col-md-2 col-lg-2" style="text-align:center;margin:auto">
                      <img src="{{ asset('images/bsc-logo.svg') }}" style="height:75px">
                  </div>

                  <div class="col-md-9 col-lg-9">

                      <div style="-webkit-box-shadow: 0px 28px 28px -24px rgb(56 62 86 / 25%);box-shadow: 0px 28px 28px -24px rgb(56 62 86 / 25%);border-radius: 12px;padding: 16px 20px;text-decoration: none !important;display: block;">
                          <div class="text-center">
                            <input type="text" value="0xd8e9d1183cde925d292586d699fa34848107830a" id="smartcontractaddress" readonly style="width:100%;text-align:center;color:#ffffff;background:none;border:none" />
                          </div>
                          <button type="button" style="cursor: pointer;border-radius:15px;width:100%" class="btn btn-primary" onclick="copyContract()">
                              <span class="fa fa-copy"></span>
                              Copy
                          </button>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
</div>
</section>
<!--/ Tokenonmics -->

<!-- About -->
<section class="about section-padding" id="about">
<div class="container">
    <div class="heading text-center">
        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
            <h6 class="sub-title">About</h6>
            <h2 class="title">About</h2>
        </div>
    </div>

    <div class="content-area">
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <p style="color:#ffffff">Do you know why this waving cat statue is widely displayed in business premises.</p>
                <p style="color:#ffffff">Well, a little review, this waving cat statue is familiarly called maneki neko, in Japanese it.</p>
            </div>

            <div class="col-md-4 col-lg-4">
                <p style="color:#ffffff">This is where our inspiration to name our token WINCAT makes the cat of victory after the token's name,</p>
                <p style="color:#ffffff">and makes this motivation so that every holder can enjoy the profit from the name of this token</p>
                <p style="color:#ffffff">NFT's (non fungible tokens) are a special type of cryptographic token which represents something unique; non-fungible tokens are thus not mutually interchangeable. We choose Win Cats for our platform because they are unique as NFTs.</p>
            </div>

            <div class="col-md-4 col-lg-4">
                <p style="color:#ffffff">On our website, anyone can make their own work or art and enter it into our NFT marketplace to be traded using WINCAT tokens.</p>
                <p style="color:#ffffff">This is the future for those of you who have a hobby or do work in the arts</p>
                <p style="color:#ffffff">Do you know why this waving cat statue is widely displayed in business premises.</p>
            </div>
        </div>
    </div>
</div>
</section>
<!--/ About -->

<!-- Whitepaper -->
<section id="whitepaper" class="whitepaper section-padding">
<div class="container">
    <div class="heading text-center">
        <h6 class="sub-title">Documents</h6>
        <h2 class="title">Whitepaper</h2>
        <p class="content-desc animated" data-animation="fadeInUpShorter" data-animation-delay="0.4s">Terms of service are rules by which one must agree to abide in order to use a service.
            <br class="d-none d-xl-block">Terms of service can also be merely a disclaimer, especially regarding the use of websites.</p>
    </div>
    <div class="row">
        <div class="col-lg-5 col-md-12">
            <div class="whitepaper-img">
                <img class="img-fluid animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s" src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/whitepaper.png" alt="whitepaper">
            </div>
        </div>
        <div class="col-lg-7 col-md-12">
            <div class="content-area">
                <h4 class="title animated" data-animation="fadeInUpShorter" data-animation-delay="0.5s">Read Whitepaper</h4>
                <p class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">A white paper is an authoritative report or guide that informs readers concisely about a complex issue and presents the issuing body's philosophy on the matter. It is meant to help readers understand an issue, solve a problem, or make a decision.</p>
                <p class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.7s">The initial British term concerning a type of government-issued document has proliferated, taking a somewhat new meaning in business. In business, a white paper is closer to a form of marketing presentation, a tool meant to persuade customers and partners and promote a product or viewpoint, White papers may be considered grey literature.</p>
                <p class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.8s">Since the early 1990s, the term "white paper", or "whitepaper", has been applied to documents used as marketing or sales tools in business.</p>
                <div class="whitepaper-languages">
                    <div class="row">
                        <div class="col-6 col-md-3 text-center mt-4 animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">
                            <a href="#" title="English">
                                <img src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/flag-1.png" alt="English">
                                <div class="lang-text">
                                    <span class="icon ti-download mr-1"></span>
                                    <span class="language">English</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 text-center mt-4 animated" data-animation="fadeInUpShorter" data-animation-delay="0.7s">
                            <a href="#" title="Japanese">
                                <img src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/flag-2.png" alt="English">
                                <div class="lang-text">
                                    <span class="icon ti-download mr-1"></span>
                                    <span class="language">Japanese</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 text-center mt-4 animated" data-animation="fadeInUpShorter" data-animation-delay="0.8s">
                            <a href="#" title="Russian">
                                <img src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/flag-3.png" alt="English">
                                <div class="lang-text">
                                    <span class="icon ti-download mr-1"></span>
                                    <span class="language">Russian</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 text-center mt-4 animated" data-animation="fadeInUpShorter" data-animation-delay="0.9s">
                            <a href="#" title="Chinese">
                                <img src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/flag-4.png" alt="English">
                                <div class="lang-text">
                                    <span class="icon ti-download mr-1"></span>
                                    <span class="language">Chinese</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--/ Whitepaper -->
<!-- Pre-Sale & Mobile Apps -->
<section id="token-sale-mobile-app" class="token-sale-mobile-app section-padding ">
<!-- Tokens Sale -->
<div class="token-sale">
    <div class="container">
        <div class="heading text-center">
            <h6 class="sub-title">Pre-Sale &amp; Values</h6>
            <h2 class="title">Tokens Sale</h2>
            <p class="content-desc animated" data-animation="fadeInUpShorter" data-animation-delay="0.4s">The first token sale (also known as an ICO) was held by Mastercoin in
                <br class="d-none d-xl-block">July 2013. Ethereum raised money with a token sale in 2014.</p>
        </div>
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6 col-md-12 animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">
                <div class="token-sale-counter">
                    <h5>ICO will start in</h5>
                    <div class="token-details text-center">
                        <!-- ICO Counter -->
                        <div class="clock-counter mb-4">
                            <div class="clock ml-0 mt-5 d-flex justify-content-center"></div>
                            <div class="message"></div>
                        </div>
                        <!-- ICO Counter -->
                        <!-- Progressbar -->
                        <div class="loading-bar mb-2 position-relative">
                            <div class="progres-area pb-5">
                                <ul class="progress-top">
                                    <li></li>
                                    <li class="pre-sale">Pre-Sale</li>
                                    <li>Soft Cap</li>
                                    <li class="bonus">Bonus</li>
                                    <li></li>
                                </ul>
                                <ul class="progress-bars">
                                    <li></li>
                                    <li>|</li>
                                    <li>|</li>
                                    <li>|</li>
                                    <li></li>
                                </ul>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-custom" role="progressbar" style="width: 65%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress-bottom">
                                    <div class="progress-info">65% target raised</div>
                                    <div class="progress-info">1 ETH = $1000 = 3177.38 CIC</div>
                                </div>
                            </div>
                        </div>
                        <!--/ Progressbar -->
                        <a href="#" class="btn btn-lg btn-glow btn-gradient-blue">Purchase Token</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6 col-md-12 mt-5 pl-4 animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">
                <div class="row">
                    <p>We have successfully reached the soft cap! Join now and get a higher discount.
                        <br/>Get your tokens for the best price: We fixed the Ether price at $800.</p>
                    <div class="col-md-5">
                        <ul class="token-sale-info">
                            <li>Public PRE-ITS starts <strong class="white">13 March</strong></li>
                            <li>Public ITS ends <strong class="white">25 May</strong></li>
                            <li>Public ITS starts <strong class="white">25 April</strong></li>
                        </ul>
                    </div>
                    <div class="col-md-7 pr-0">
                        <ul class="token-sale-info">
                            <li>Acceptable currencies <strong class="white">ETH, BTC, LTC</strong></li>
                            <li>Minimal transaction amount <strong class="white">1 ETH, 1 BTC, 1 LTC</strong></li>
                            <li>Number of tokens for sale <strong class="white">890,000 CIC (8%)</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Tokens Sale -->
<!-- Crypto ico App -->
<div id="mobile-app" class="mobile-app">
    <div class="container">
        <div class="heading text-center">
            <h6 class="sub-title">Crypto ico App</h6>
            <h2 class="title">Mobile App</h2>
            <p class="content-desc animated" data-animation="fadeInUpShorter" data-animation-delay="0.4s">A cryptocurrency wallet stores the public and private keys which can be used to receive or spend
                <br/>the cryptocurrency. A wallet can contain multiple public and private key pairs.</p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">
                <div class="heading mb-4">
                    <h4 class="title">Android &amp; ios app</h4>
                </div>
                <p>Mobile app development is a term used to denote the act or process by which a mobile app is developed for mobile devices, such as personal digital assistants, enterprise digital assistants or mobile phones. These applications can be pre-installed on phones during manufacturing platforms, or delivered as web application using server-side or client-side processing to provide an "application-like" experience within a Web browser.</p>
                <ul class="app-features">
                    <li class="dark-bg-text-color"><i class="ti-pulse white mr-3"></i>Live crypto rate</li>
                    <li class="dark-bg-text-color"><i class="ti-stats-up white mr-3"></i>Latest cryptocurrency news</li>
                    <li class="dark-bg-text-color"><i class="ti-split-h white mr-3"></i>Cryptocurrency exchange</li>
                </ul>
                <a href="#" class="android mobile-button btn btn-gradient-purple btn-glow mr-4"><span>Android</span> <img src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/icon-android.png" alt=""></a>
                <a href="#" class="apple mobile-button btn btn-gradient-purple btn-glow"><span>Apple</span> <img src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/icon-apple.png" alt=""></a>
            </div>
            <div class="col-lg-6 col-md-12 move-first">
                <div class="mobile-app-imgs">
                    <img src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/mobile-app-1.png" alt="mobile-app" class="mobile-app-img-1 animated" data-animation="fadeInUpShorter" data-animation-delay="0.9s">
                    <img src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/mobile-app-2.png" alt="mobile-app" class="mobile-app-img-2 animated" data-animation="zoomIn" data-animation-delay="1.4s">
                    <img src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/mobile-app-3.png" alt="mobile-app" class="mobile-app-img-3 animated" data-animation="zoomIn" data-animation-delay="1.9s">
                    <img src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/mobile-app-4.png" alt="mobile-app" class="mobile-app-img-4 animated" data-animation="zoomIn" data-animation-delay="2.4s">
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Crypto ico App -->
</section>
<!--/ Pre-Sale & Mobile Apps -->
<!-- Roadmap -->
<section id="roadmap" class="roadmap section-padding">
<div class="container">
    <div class="heading text-center">
        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
            <h6 class="sub-title">Implementation</h6>
            <h2 class="title">Roadmap</h2>
        </div>
        <p class="content-desc animated" data-animation="fadeInUpShorter" data-animation-delay="0.4s">This is a list of cryptocurrencies. The number of cryptocurrencies available over
            <br class="d-none d-xl-block">the internet as of 7 January 2018 is over 1384 and growing.</p>
    </div>
    <div class="row animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">
        <div class="col-12">
            <div class="roadmap-container">
                <div class="swiper-container">
                    <div class="swiper-wrapper timeline">
                        <div class="swiper-slide">
                            <div class="roadmap-info">
                                <div class="timestamp completed">
                                    <span class="date">November 2017</span>
                                </div>
                                <div class="status completed">
                                    <span>Crypto Ico <br/>Platform idea</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="roadmap-info">
                                <div class="timestamp completed">
                                    <span class="date">January 2018</span>
                                </div>
                                <div class="status completed">
                                    <span>Technical &amp; strategy <br/>devlopment</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide active">
                            <div class="roadmap-info">
                                <div class="timestamp active">
                                    <span class="date">May 2018</span>
                                </div>
                                <div class="status active">
                                    <span>Ico Realease</span>
                                    <span class="live">Live Now</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="roadmap-info">
                                <div class="timestamp remaining">
                                    <span class="date">August 2018</span>
                                </div>
                                <div class="status remaining">
                                    <span>Beta version of <br/>Crypto Ico </span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="roadmap-info">
                                <div class="timestamp remaining">
                                    <span class="date">November 2018</span>
                                </div>
                                <div class="status remaining">
                                    <span>Software development kit <br>for integrations</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="roadmap-info">
                                <div class="timestamp remaining">
                                    <span class="date">December 2018</span>
                                </div>
                                <div class="status remaining">
                                    <span>Mobile apps for <br/>iOS &amp; Android</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-control">
                    <span class="prev-slide"></span>
                    <span class="next-slide"></span>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--/ Roadmap -->
<!-- Our Coin -->
<section id="our-coin" class="our-coin section-padding ">
<div class="container">
    <div class="heading text-center">
        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
            <h6 class="sub-title">About coin</h6>
            <h2 class="title">Our COIN</h2>
        </div>
        <p class="content-desc animated" data-animation="fadeInUpShorter" data-animation-delay="0.4s">Decentralized cryptocurrency is produced by the entire cryptocurrency system collectively
            <br class="d-none d-xl-block">at a rate which is defined when the system is created and which is publicly known. </p>
    </div>
    <div class="row">
        <div class="col-lg-5 col-md-12 animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">
            <div class="coin-img">
                <img class="img-fluid" src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/our-coin.png" alt="Coin Image">
            </div>
        </div>
        <div class="col-lg-7 col-md-12">
            <div class="heading mb-4">
                <h4 class="title animated" data-animation="fadeInUpShorter" data-animation-delay="0.5s">CIC Coin</h4>
            </div>
            <p class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">The validity of each cryptocurrency's coins is provided by a blockchain. A blockchain is a continuously growing list of records, called blocks, which are linked and secured using cryptography.Each block typically contains a hash pointer as a link to a previous block, a timestamp and transaction data. By design, blockchains are inherently resistant to modification of the data. a blockchain is typically managed by a peer-to-peer network collectively adhering to a protocol for validating new blocks. Once recorded</p>
            <p class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.7s">The block time is the average time it takes for the network to generate one extra block in the blockchain.[21] Some blockchains create a new block as frequently as every five seconds.</p>
        </div>
    </div>
</div>
</section>
<!--/ Our Coin -->
<!-- Token Stats -->
<section id="token-distribution" class="token-distribution section-padding">
<div class="container">
    <div class="heading text-center">
        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
            <h6 class="sub-title">Token Stats</h6>
            <h2 class="title">Token Distribution</h2>
        </div>
        <p class="content-desc animated" data-animation="fadeInUpShorter" data-animation-delay="0.4s">The ICO usually takes place before the project is completed, and helps fund the expenses
            <br class="d-none d-xl-block">undertaken by the founding team until launch. For some of the larger projects.</p>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-6 pr-5">
            <div class="content-area">
                <h4 class="title animated" data-animation="fadeInUpShorter" data-animation-delay="0.5s">Details</h4>
                <p class="mt-1 animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">To calculate the number of tokens you’ll receive, you can follow the following formula. Note that this applies to public presale contributions only. If you participated through a syndicate or private presale,</p>
                <p class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.7s">To calculate the number of tokens you’ll receive, you can follow the following formula. Note that this applies to public presale contributions only. If you participated through a syndicate or private presale,</p>
                <p class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.8s"><span>Symbol:</span> <strong class="grey-accent2">CIC</strong></p>
                <p class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.9s"><span>Initial Value:</span> <strong class="grey-accent2">1 ETH = 3177.38 CIC</strong></p>
                <p class="animated" data-animation="fadeInUpShorter" data-animation-delay="1.0s"><span>Type:</span> <strong class="grey-accent2">ERC20</strong></p>
            </div>
        </div>
        <div class="col-md-12 col-lg-6 move-first animated" data-animation="fadeInUpShorter" data-animation-delay="0.8s">
            <div class="token-img">
                <img class="img-fluid" src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/chart.png" alt="token-distribution">
            </div>
        </div>
    </div>
</div>
</section>
<!--/ Token Stats -->
<!-- Team -->
<section id="team" class="team section-padding ">
<div class="container">
    <div class="heading text-center">
        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
            <h6 class="sub-title">Creative</h6>
            <h2 class="title">Team</h2>
        </div>
        <p class="content-desc animated" data-animation="fadeInUpShorter" data-animation-delay="0.4s">A cryptocurrency (or crypto currency) is a digital asset designed to work as a medium
            <br class="d-none d-xl-block">of exchange that uses cryptography to secure its transactions.</p>
    </div>
    <div class="row team-intro justify-content-center text-center">
        <div class="col-12 col-md-4 col-lg-2 team-width animated" data-animation="fadeInUpShorter" data-animation-delay="0.5s">
            <span>18</span>
            <p>Creative and
                <br>Dedicated People</p>
        </div>
        <div class="col-12 col-md-4 col-lg-2 team-width animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">
            <span>125</span>
            <p>Years of combined experience</p>
        </div>
        <div class="col-12 col-md-4 col-lg-2 team-width animated" data-animation="fadeInUpShorter" data-animation-delay="0.7s">
            <span>10</span>
            <p>Years of blockchain experience</p>
        </div>
    </div>
    <div class="team-profile mt-5">
        <div class="row mb-5">
            <div class="col-sm-12 col-md-6 col-lg-4 mb-5 animated" data-animation="flipInX" data-animation-delay="0.8s">
                <div class="d-flex team-member">
                    <div class="team-img float-left mr-3" data-toggle="modal" data-target="#teamUser9">
                        <img src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/user-9.png" alt="team-profile-1" class="rounded-circle" width="128">
                    </div>
                    <div class="profile align-self-center">
                        <div class="name">Logan S. Perez</div>
                        <div class="role">CEO &amp; CFO</div>
                        <div class="social-profile mt-3">
                            <a href="#" title="Linkedin" class="font-medium grey-accent2 mr-2"><i class="ti-linkedin"></i></a>
                            <a href="#" title="Twitter" class="font-medium grey-accent2 mr-2"><i class="ti-twitter-alt"></i></a>
                            <a href="#" title="Github" class="font-medium grey-accent2"><i class="ti-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-5 animated" data-animation="flipInX" data-animation-delay="0.9s">
                <div class="d-flex team-member">
                    <div class="team-img float-left mr-3" data-toggle="modal" data-target="#teamUser6">
                        <img src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/user-6.png" alt="team-profile-1" class="rounded-circle" width="128">
                    </div>
                    <div class="profile align-self-center">
                        <div class="name">Susan J. Newsom</div>
                        <div class="role">Graphic Designer</div>
                        <div class="social-profile mt-3">
                            <a href="#" title="Linkedin" class="font-medium grey-accent2 mr-2"><i class="ti-linkedin"></i></a>
                            <a href="#" title="Twitter" class="font-medium grey-accent2 mr-2"><i class="ti-twitter-alt"></i></a>
                            <a href="#" title="Github" class="font-medium grey-accent2"><i class="ti-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-5 animated" data-animation="flipInX" data-animation-delay="1.0s">
                <div class="d-flex team-member">
                    <div class="team-img float-left mr-3" data-toggle="modal" data-target="#teamUser2">
                        <img src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/user-2.png" alt="team-profile-1" class="rounded-circle" width="128">
                    </div>
                    <div class="profile align-self-center">
                        <div class="name">Mary J. Wardle</div>
                        <div class="role">CPO</div>
                        <div class="social-profile mt-3">
                            <a href="#" title="Linkedin" class="font-medium grey-accent2 mr-2"><i class="ti-linkedin"></i></a>
                            <a href="#" title="Twitter" class="font-medium grey-accent2 mr-2"><i class="ti-twitter-alt"></i></a>
                            <a href="#" title="Github" class="font-medium grey-accent2"><i class="ti-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-5 animated" data-animation="flipInX" data-animation-delay="1.1s" data-toggle="modal" data-target="#teamUser10">
                <div class="d-flex team-member">
                    <div class="team-img float-left mr-3">
                        <img src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/user-10.png" alt="team-profile-1" class="rounded-circle" width="128">
                    </div>
                    <div class="profile align-self-center">
                        <div class="name">Nicholas M. Sharpe</div>
                        <div class="role">UI / UX Designer</div>
                        <div class="social-profile mt-3">
                            <a href="#" title="Linkedin" class="font-medium grey-accent2 mr-2"><i class="ti-linkedin"></i></a>
                            <a href="#" title="Twitter" class="font-medium grey-accent2 mr-2"><i class="ti-twitter-alt"></i></a>
                            <a href="#" title="Github" class="font-medium grey-accent2"><i class="ti-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-5 animated" data-animation="flipInX" data-animation-delay="1.2s" data-toggle="modal" data-target="#teamUser4">
                <div class="d-flex team-member">
                    <div class="team-img float-left mr-3">
                        <img src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/user-4.png" alt="team-profile-1" class="rounded-circle" width="128">
                    </div>
                    <div class="profile align-self-center">
                        <div class="name">Cecelia T. Carter</div>
                        <div class="role">CTO</div>
                        <div class="social-profile mt-3">
                            <a href="#" title="Linkedin" class="font-medium grey-accent2 mr-2"><i class="ti-linkedin"></i></a>
                            <a href="#" title="Twitter" class="font-medium grey-accent2 mr-2"><i class="ti-twitter-alt"></i></a>
                            <a href="#" title="Github" class="font-medium grey-accent2"><i class="ti-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-5 animated" data-animation="flipInX" data-animation-delay="1.3s" data-toggle="modal" data-target="#teamUser13">
                <div class="d-flex team-member">
                    <div class="team-img float-left mr-3">
                        <img src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/user-13.png" alt="team-profile-1" class="rounded-circle" width="128">
                    </div>
                    <div class="profile align-self-center">
                        <div class="name">Terry T. Robinette</div>
                        <div class="role">Developer</div>
                        <div class="social-profile mt-3">
                            <a href="#" title="Linkedin" class="font-medium grey-accent2 mr-2"><i class="ti-linkedin"></i></a>
                            <a href="#" title="Twitter" class="font-medium grey-accent2 mr-2"><i class="ti-twitter-alt"></i></a>
                            <a href="#" title="Github" class="font-medium grey-accent2"><i class="ti-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--/ Team -->
<!-- Advisors -->
<section id="advisor" class="advisor team section-padding">
<div class="container">
    <div class="heading text-center">
        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
            <h6 class="sub-title">helpful</h6>
            <h2 class="title">Advisors</h2>
        </div>
        <p class="content-desc animated" data-animation="fadeInUpShorter" data-animation-delay="0.4s">Digital currency is a money balance recorded electronically on
            <br class="d-none d-xl-block">a stored-value card or other device. Another form of electronic money is network money.</p>
    </div>
    <div class="team-profile mt-5">
        <div class="row mb-5">
            <div class="col-sm-12 col-md-6 col-lg-4 mb-5 animated" data-animation="jello" data-animation-delay="0.5s">
                <div class="d-flex">
                    <div class="team-img float-left mr-3" data-toggle="modal" data-target="#teamUser1">
                        <img src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/user-1.png" alt="team-profile-1" class="rounded-circle" width="128">
                    </div>
                    <div class="team-icon">
                        <i class="ti-linkedin"></i>
                    </div>
                    <div class="profile align-self-center">
                        <div class="name">Nadia Sidko</div>
                        <div class="role">Blockchain Entrepreneur</div>
                        <div class="crypto-profile">
                            <img src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/company-logo-1.png" alt="Team User">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-5 animated" data-animation="jello" data-animation-delay="0.6s">
                <div class="d-flex">
                    <div class="team-img float-left mr-3" data-toggle="modal" data-target="#teamUser8">
                        <img src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/user-8.png" alt="team-profile-1" class="rounded-circle" width="128">
                    </div>
                    <div class="team-icon">
                        <i class="ti-linkedin"></i>
                    </div>
                    <div class="profile align-self-center">
                        <div class="name">Pavel Volek</div>
                        <div class="role">Entrepreneur and Investor</div>
                        <div class="crypto-profile">
                            <img src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/company-logo-2.png" alt="Team User">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-5 animated" data-animation="jello" data-animation-delay="0.7s" data-toggle="modal" data-target="#teamUser3">
                <div class="d-flex">
                    <div class="team-img float-left mr-3">
                        <img src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/user-3.png" alt="team-profile-1" class="rounded-circle" width="128">
                    </div>
                    <div class="team-icon">
                        <i class="ti-linkedin"></i>
                    </div>
                    <div class="profile align-self-center">
                        <div class="name">Alyona Blakytna</div>
                        <div class="role">Fin-Tech Entrepreneur</div>
                        <div class="crypto-profile">
                            <img src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/company-logo-3.png" alt="Team User">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-5 animated" data-animation="jello" data-animation-delay="0.8s" data-toggle="modal" data-target="#teamUser11">
                <div class="d-flex">
                    <div class="team-img float-left mr-3">
                        <img src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/user-11.png" alt="team-profile-1" class="rounded-circle" width="128">
                    </div>
                    <div class="team-icon">
                        <i class="ti-linkedin"></i>
                    </div>
                    <div class="profile align-self-center">
                        <div class="name">Martin Solarik</div>
                        <div class="role">Fin-Tech Investor</div>
                        <div class="crypto-profile">
                            <img src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/company-logo-4.png" alt="Team User">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-5 animated" data-animation="jello" data-animation-delay="0.9s" data-toggle="modal" data-target="#teamUser7">
                <div class="d-flex">
                    <div class="team-img float-left mr-3">
                        <img src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/user-7.png" alt="team-profile-1" class="rounded-circle" width="128">
                    </div>
                    <div class="team-icon">
                        <i class="ti-linkedin"></i>
                    </div>
                    <div class="profile align-self-center">
                        <div class="name">Kate Fisenko</div>
                        <div class="role">Fin-Tech Investor</div>
                        <div class="crypto-profile">
                            <img src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/company-logo-5.png" alt="Team User">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-5 animated" data-animation="jello" data-animation-delay="1.0s" data-toggle="modal" data-target="#teamUser12">
                <div class="d-flex">
                    <div class="team-img float-left mr-3">
                        <img src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/user-12.png" alt="team-profile-1" class="rounded-circle" width="128">
                    </div>
                    <div class="team-icon">
                        <i class="ti-linkedin"></i>
                    </div>
                    <div class="profile align-self-center">
                        <div class="name">Michal Krajnansky</div>
                        <div class="role">Blockchain Entrepreneur</div>
                        <div class="crypto-profile">
                            <img src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/company-logo-1.png" alt="Team User">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--/ Advisors -->
<!-- FAQ -->
<section id="faq" class="faq section-padding">
<div class="container">
    <div class="heading text-center">
        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
            <h6 class="sub-title">question</h6>
            <h2 class="title">FAQ</h2>
        </div>
        <p class="content-desc animated" data-animation="fadeInUpShorter" data-animation-delay="0.4s">Originally the term "FAQ" referred to the Frequently Asked Question itself, and the
            <br class="d-none d-xl-block">compilation of questions and answers was known as a "FAQ list" or some similar expression.</p>
    </div>
    <div class="row">
        <div class="col">
            <nav>
                <div class="nav nav-pills nav-underline mb-5 animated" data-animation="fadeInUpShorter" data-animation-delay="0.5s" id="myTab" role="tablist">
                    <a href="#general" class="nav-item nav-link active" id="general-tab" data-toggle="tab" aria-controls="general" aria-selected="true" role="tab">General</a>
                    <a href="#ico" class="nav-item nav-link" id="ico-tab" data-toggle="tab" aria-controls="ico" aria-selected="false" role="tab">Pre-ICO</a>
                    <a href="#token" class="nav-item nav-link" id="token-tab" data-toggle="tab" aria-controls="token" aria-selected="false" role="tab">Tokens</a>
                    <a href="#client" class="nav-item nav-link" id="client-tab" data-toggle="tab" aria-controls="client" aria-selected="false" role="tab">Client</a>
                    <a href="#legal" class="nav-item nav-link" id="legal-tab" data-toggle="tab" aria-controls="legal" aria-selected="false" role="tab">Legal</a>
                </div>
            </nav>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                    <div id="general-accordion" class="collapse-icon accordion-icon-rotate">
                        <div class="card animated" data-animation="fadeInUpShorter" data-animation-delay="0.1s">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                <a class="btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="icon"></span>
                                    Can I make payments directly from an exchange?
                                </a>
                              </h5>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#general-accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card animated" data-animation="fadeInUpShorter" data-animation-delay="0.2s">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                <a class="btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="icon"></span>
                                    When will CICO be listed on exchanges?
                                </a>
                              </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#general-accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                <a class="btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span class="icon"></span>
                                    What is the CICO Token asmart contract address?
                                </a>
                              </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#general-accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="ico" role="tabpanel" aria-labelledby="ico-tab">
                    <div id="ico-accordion" class="collapse-icon accordion-icon-rotate">
                        <div class="card">
                            <div class="card-header" id="icoHeadingOne">
                                <h5 class="mb-0">
                                <a class="btn-link" data-toggle="collapse" data-target="#icoCollapseOne" aria-expanded="true" aria-controls="icoCollapseOne">
                                    <span class="icon"></span>
                                    Pityful a rethoric question ran over her cheek?
                                </a>
                              </h5>
                            </div>
                            <div id="icoCollapseOne" class="collapse show" aria-labelledby="icoHeadingOne" data-parent="#ico-accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="icoHeadingTwo">
                                <h5 class="mb-0">
                                <a class="btn-link collapsed" data-toggle="collapse" data-target="#icoCollapseTwo" aria-expanded="false" aria-controls="icoCollapseTwo">
                                    <span class="icon"></span>
                                    Which roasted parts of sentences fly into your mouth?
                                </a>
                              </h5>
                            </div>
                            <div id="icoCollapseTwo" class="collapse" aria-labelledby="icoHeadingTwo" data-parent="#ico-accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="icoHeadingThree">
                                <h5 class="mb-0">
                                <a class="btn-link collapsed" data-toggle="collapse" data-target="#icoCollapseThree" aria-expanded="false" aria-controls="icoCollapseThree">
                                    <span class="icon"></span>
                                    Collapsible Group Item #3
                                </a>
                              </h5>
                            </div>
                            <div id="icoCollapseThree" class="collapse" aria-labelledby="icoHeadingThree" data-parent="#ico-accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="token" role="tabpanel" aria-labelledby="token-tab">
                    <div id="token-accordion" class="collapse-icon accordion-icon-rotate">
                        <div class="card">
                            <div class="card-header" id="tokenHeadingOne">
                                <h5 class="mb-0">
                                <a class="btn-link" data-toggle="collapse" data-target="#tokenCollapseOne" aria-expanded="true" aria-controls="tokenCollapseOne">
                                    <span class="icon"></span>
                                    Collapsible Group Item #1
                                </a>
                              </h5>
                            </div>
                            <div id="tokenCollapseOne" class="collapse show" aria-labelledby="tokenHeadingOne" data-parent="#token-accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="tokenHeadingTwo">
                                <h5 class="mb-0">
                                <a class="btn-link collapsed" data-toggle="collapse" data-target="#tokenCollapseTwo" aria-expanded="false" aria-controls="tokenCollapseTwo">
                                    <span class="icon"></span>
                                    Collapsible Group Item #2
                                </a>
                              </h5>
                            </div>
                            <div id="tokenCollapseTwo" class="collapse" aria-labelledby="tokenHeadingTwo" data-parent="#token-accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="tokenHeadingThree">
                                <h5 class="mb-0">
                                <a class="btn-link collapsed" data-toggle="collapse" data-target="#tokenCollapseThree" aria-expanded="false" aria-controls="tokenCollapseThree">
                                    <span class="icon"></span>
                                    Collapsible Group Item #3
                                </a>
                              </h5>
                            </div>
                            <div id="tokenCollapseThree" class="collapse" aria-labelledby="tokenHeadingThree" data-parent="#token-accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="client" role="tabpanel" aria-labelledby="client-tab">
                    <div id="client-accordion" class="collapse-icon accordion-icon-rotate">
                        <div class="card">
                            <div class="card-header" id="clientHeadingOne">
                                <h5 class="mb-0">
                                <a class="btn-link" data-toggle="collapse" data-target="#clientCollapseOne" aria-expanded="true" aria-controls="clientCollapseOne">
                                    <span class="icon"></span>
                                    Collapsible Group Item #1
                                </a>
                              </h5>
                            </div>
                            <div id="clientCollapseOne" class="collapse show" aria-labelledby="clientHeadingOne" data-parent="#client-accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="clientHeadingTwo">
                                <h5 class="mb-0">
                                <a class="btn-link collapsed" data-toggle="collapse" data-target="#clientCollapseTwo" aria-expanded="false" aria-controls="clientCollapseTwo">
                                    <span class="icon"></span>
                                    Collapsible Group Item #2
                                </a>
                              </h5>
                            </div>
                            <div id="clientCollapseTwo" class="collapse" aria-labelledby="clientHeadingTwo" data-parent="#client-accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="clientHeadingThree">
                                <h5 class="mb-0">
                                <a class="btn-link collapsed" data-toggle="collapse" data-target="#clientCollapseThree" aria-expanded="false" aria-controls="clientCollapseThree">
                                    <span class="icon"></span>
                                    Collapsible Group Item #3
                                </a>
                              </h5>
                            </div>
                            <div id="clientCollapseThree" class="collapse" aria-labelledby="clientHeadingThree" data-parent="#client-accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="legal" role="tabpanel" aria-labelledby="legal-tab">
                    <div id="legal-accordion" class="collapse-icon accordion-icon-rotate">
                        <div class="card">
                            <div class="card-header" id="legalHeadingOne">
                                <h5 class="mb-0">
                                <a class="btn-link" data-toggle="collapse" data-target="#legalCollapseOne" aria-expanded="true" aria-controls="legalCollapseOne">
                                    <span class="icon"></span>
                                    Collapsible Group Item #1
                                </a>
                              </h5>
                            </div>
                            <div id="legalCollapseOne" class="collapse show" aria-labelledby="legalHeadingOne" data-parent="#legal-accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="legalHeadingTwo">
                                <h5 class="mb-0">
                                <a class="btn-link collapsed" data-toggle="collapse" data-target="#legalCollapseTwo" aria-expanded="false" aria-controls="legalCollapseTwo">
                                    <span class="icon"></span>
                                    Collapsible Group Item #2
                                </a>
                              </h5>
                            </div>
                            <div id="legalCollapseTwo" class="collapse" aria-labelledby="legalHeadingTwo" data-parent="#legal-accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="legalHeadingThree">
                                <h5 class="mb-0">
                                <a class="btn-link collapsed" data-toggle="collapse" data-target="#legalCollapseThree" aria-expanded="false" aria-controls="legalCollapseThree">
                                    <span class="icon"></span>
                                    Collapsible Group Item #3
                                </a>
                              </h5>
                            </div>
                            <div id="legalCollapseThree" class="collapse" aria-labelledby="legalHeadingThree" data-parent="#legal-accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--/ FAQ -->
<!-- Contact -->
<section id="contact" class="contact section-padding">
<div class="container">
    <div class="heading text-center">
        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
            <h6 class="sub-title">JOIN US</h6>
            <h2 class="title">Contact</h2>
        </div>
        <p class="content-desc animated" data-animation="fadeInUpShorter" data-animation-delay="0.4s">Have questions? We’re happy to help.</p>
    </div>
    <div class="row">
        <div class="col-xl-8 col-md-12 mx-auto">
            <ul class="list-unstyled contact-info pb-5 mb-5">
                <li class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.5s">
                    <i class="ti-headphone"></i>
                    <span class="ml-1">+44 0123 4567</span>
                </li>
                <li class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">
                    <i class="ti-email"></i>
                    <span class="ml-1">info@yourcompany.com</span>
                </li>
                <li class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.7s">
                    <i class="ti-comment-alt"></i>
                    <span class="ml-1">Join us on Telegram</span>
                </li>
            </ul>
            <form action="#" method="post" accept-charset="utf-8" class="text-center">
                <input type="text" class="form-control animated" data-animation="fadeInUpShorter" data-animation-delay="0.8s" name="name" placeholder="Your Name">
                <input type="text" class="form-control animated" data-animation="fadeInUpShorter" data-animation-delay="0.9s" name="mail" placeholder="Your Mail">
                <input type="text" class="form-control animated" data-animation="fadeInUpShorter" data-animation-delay="1.0s" name="message" placeholder="Your Massage">
                <button type="submit" class="btn btn-lg btn-gradient-purple btn-glow animated" data-animation="fadeInUpShorter" data-animation-delay="1.1s">Send Message</button>
            </form>
        </div>
    </div>
</div>
</section>
<!--/ Contact -->
<!-- Exchange Listing Area -->
<section class="exchange-listing" id="exchange-listing">
<div class="container-fluid bg-color">
    <div class="container">
        <div class="row listing list-unstyled">
            <div class="col d-none d-lg-block text-center animated" data-animation="fadeInUpShorter" data-animation-delay="0.2s">
                <img src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/icon-arrow.png" alt="icon-arrow">
                <p class="mt-1">Exchange listing
                    <br>to be announced</p>
            </div>
            <div class="col text-center animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                <h2>4.3/5</h2>
                <img src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/ico-track.png" alt="ico-track">
            </div>
            <div class="col text-center animated" data-animation="fadeInUpShorter" data-animation-delay="0.4s">
                <h2>4.8/5</h2>
                <img src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/ico-bench.png" alt="ico-bench">
            </div>
            <div class="col text-center animated" data-animation="fadeInUpShorter" data-animation-delay="0.5s">
                <h2>3.9/5</h2>
                <img src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/ico-ranker.png" alt="ico-ranker">
            </div>
            <div class="col text-center animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">
                <h2>4.1/5</h2>
                <img src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/ico-bazaar.png" alt="ico-bazaar">
            </div>
        </div>
    </div>
</div>
</section>
<!--/ Exchange Listing Area -->
<!-- ICO Video Modal -->
<div class="modal ico-modal fade" id="ico-modal" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body p-0">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" id="video"></iframe>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Dev Team Modal Pop-ups -->
<!-- Team user popup - teamUser9 -->
<div class="modal team-modal fade" id="teamUser9" tabindex="-1" role="dialog" aria-labelledby="teamUser9Title" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
            <div class="row p-4">
                <div class="col-12 col-md-5">
                    <img class="img-fluid rounded" src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/user-9-lg.jpg" alt="Logan S. Perez">
                </div>
                <div class="col-12 col-md-7 mt-sm-3">
                    <h5 id="teamUser9Title">Logan S. Perez</h5>
                    <small class="text-muted mb-0 ">CEO & CFO</small>
                    <div class="social-profile">
                        <a href="#" title="Linkedin" class="font-medium grey-accent2 mr-2"><i class="ti-linkedin"></i></a>
                        <a href="#" title="Twitter" class="font-medium grey-accent2 mr-2"><i class="ti-twitter-alt"></i></a>
                        <a href="#" title="Github" class="font-medium grey-accent2"><i class="ti-github"></i></a>
                    </div>
                    <div class="my-4">
                        <p>Experienced algorithmic crypto trader and a machine learning evangelist.</p>
                        <p>I’m focusing on the logic behind the combination of analysis tools, neural networks and genetic algorithms for optimization. Always wanted to have a trading bot with more features but never had the time to build a solution beyond basic python technical analysis tracker.</p>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">Blockchain</small> <small class="float-right">85%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">Python</small> <small class="float-right">90%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">C++</small> <small class="float-right">75%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Team user popup - teamUser6 -->
<div class="modal team-modal fade" id="teamUser6" tabindex="-1" role="dialog" aria-labelledby="teamUser6Title" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
            <div class="row p-4">
                <div class="col-12 col-md-5">
                    <img class="img-fluid rounded" src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/user-6-lg.jpg" alt="Susan J. Newsom">
                </div>
                <div class="col-12 col-md-7 mt-sm-3">
                    <h5 id="teamUser6Title">Susan J. Newsom</h5>
                    <small class="text-muted mb-0 ">Graphic Designer</small>
                    <div class="social-profile">
                        <a href="#" title="Linkedin" class="font-medium grey-accent2 mr-2"><i class="ti-linkedin"></i></a>
                        <a href="#" title="Twitter" class="font-medium grey-accent2 mr-2"><i class="ti-twitter-alt"></i></a>
                        <a href="#" title="Github" class="font-medium grey-accent2"><i class="ti-github"></i></a>
                    </div>
                    <div class="my-4">
                        <p>Experienced algorithmic crypto trader and a machine learning evangelist.</p>
                        <p>I’m focusing on the logic behind the combination of analysis tools, neural networks and genetic algorithms for optimization. Always wanted to have a trading bot with more features but never had the time to build a solution beyond basic python technical analysis tracker.</p>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">Blockchain</small> <small class="float-right">85%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">Python</small> <small class="float-right">90%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">C++</small> <small class="float-right">75%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Team user popup - teamUser2 -->
<div class="modal team-modal fade" id="teamUser2" tabindex="-1" role="dialog" aria-labelledby="teamUser2Title" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
            <div class="row p-4">
                <div class="col-12 col-md-5">
                    <img class="img-fluid rounded" src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/user-2-lg.jpg" alt="Mary J. Wardle">
                </div>
                <div class="col-12 col-md-7 mt-sm-3">
                    <h5 id="teamUser2Title">Mary J. Wardle</h5>
                    <small class="text-muted mb-0 ">CPO</small>
                    <div class="social-profile">
                        <a href="#" title="Linkedin" class="font-medium grey-accent2 mr-2"><i class="ti-linkedin"></i></a>
                        <a href="#" title="Twitter" class="font-medium grey-accent2 mr-2"><i class="ti-twitter-alt"></i></a>
                        <a href="#" title="Github" class="font-medium grey-accent2"><i class="ti-github"></i></a>
                    </div>
                    <div class="my-4">
                        <p>Experienced algorithmic crypto trader and a machine learning evangelist.</p>
                        <p>I’m focusing on the logic behind the combination of analysis tools, neural networks and genetic algorithms for optimization. Always wanted to have a trading bot with more features but never had the time to build a solution beyond basic python technical analysis tracker.</p>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">Blockchain</small> <small class="float-right">85%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">Python</small> <small class="float-right">90%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">C++</small> <small class="float-right">75%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Team user popup - teamUser10 -->
<div class="modal team-modal fade" id="teamUser10" tabindex="-1" role="dialog" aria-labelledby="teamUser10Title" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
            <div class="row p-4">
                <div class="col-12 col-md-5">
                    <img class="img-fluid rounded" src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/user-10-lg.jpg" alt="Nicholas M. Sharpe">
                </div>
                <div class="col-12 col-md-7 mt-sm-3">
                    <h5 id="teamUser10Title">Nicholas M. Sharpe</h5>
                    <small class="text-muted mb-0 ">UI / UX Designer</small>
                    <div class="social-profile">
                        <a href="#" title="Linkedin" class="font-medium grey-accent2 mr-2"><i class="ti-linkedin"></i></a>
                        <a href="#" title="Twitter" class="font-medium grey-accent2 mr-2"><i class="ti-twitter-alt"></i></a>
                        <a href="#" title="Github" class="font-medium grey-accent2"><i class="ti-github"></i></a>
                    </div>
                    <div class="my-4">
                        <p>Experienced algorithmic crypto trader and a machine learning evangelist.</p>
                        <p>I’m focusing on the logic behind the combination of analysis tools, neural networks and genetic algorithms for optimization. Always wanted to have a trading bot with more features but never had the time to build a solution beyond basic python technical analysis tracker.</p>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">Blockchain</small> <small class="float-right">85%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">Python</small> <small class="float-right">90%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">C++</small> <small class="float-right">75%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Team user popup - teamUser4 -->
<div class="modal team-modal fade" id="teamUser4" tabindex="-1" role="dialog" aria-labelledby="teamUser4Title" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
            <div class="row p-4">
                <div class="col-12 col-md-5">
                    <img class="img-fluid rounded" src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/user-4-lg.jpg" alt="Cecelia T. Carter">
                </div>
                <div class="col-12 col-md-7 mt-sm-3">
                    <h5 id="teamUser4Title">Cecelia T. Carter</h5>
                    <small class="text-muted mb-0 ">CTO</small>
                    <div class="social-profile">
                        <a href="#" title="Linkedin" class="font-medium grey-accent2 mr-2"><i class="ti-linkedin"></i></a>
                        <a href="#" title="Twitter" class="font-medium grey-accent2 mr-2"><i class="ti-twitter-alt"></i></a>
                        <a href="#" title="Github" class="font-medium grey-accent2"><i class="ti-github"></i></a>
                    </div>
                    <div class="my-4">
                        <p>Experienced algorithmic crypto trader and a machine learning evangelist.</p>
                        <p>I’m focusing on the logic behind the combination of analysis tools, neural networks and genetic algorithms for optimization. Always wanted to have a trading bot with more features but never had the time to build a solution beyond basic python technical analysis tracker.</p>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">Blockchain</small> <small class="float-right">85%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">Python</small> <small class="float-right">90%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">C++</small> <small class="float-right">75%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Team user popup - teamUser13 -->
<div class="modal team-modal fade" id="teamUser13" tabindex="-1" role="dialog" aria-labelledby="teamUser13Title" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
            <div class="row p-4">
                <div class="col-12 col-md-5">
                    <img class="img-fluid rounded" src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/user-13-lg.jpg" alt="Terry T. Robinette">
                </div>
                <div class="col-12 col-md-7 mt-sm-3">
                    <h5 id="teamUser13Title">Terry T. Robinette</h5>
                    <small class="text-muted mb-0 ">Developer</small>
                    <div class="social-profile">
                        <a href="#" title="Linkedin" class="font-medium grey-accent2 mr-2"><i class="ti-linkedin"></i></a>
                        <a href="#" title="Twitter" class="font-medium grey-accent2 mr-2"><i class="ti-twitter-alt"></i></a>
                        <a href="#" title="Github" class="font-medium grey-accent2"><i class="ti-github"></i></a>
                    </div>
                    <div class="my-4">
                        <p>Experienced algorithmic crypto trader and a machine learning evangelist.</p>
                        <p>I’m focusing on the logic behind the combination of analysis tools, neural networks and genetic algorithms for optimization. Always wanted to have a trading bot with more features but never had the time to build a solution beyond basic python technical analysis tracker.</p>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">Blockchain</small> <small class="float-right">85%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">Python</small> <small class="float-right">90%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">C++</small> <small class="float-right">75%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Advisors Team Modal Pop-ups -->
<!-- Team user popup - teamUser1 -->
<div class="modal team-modal fade" id="teamUser1" tabindex="-1" role="dialog" aria-labelledby="teamUser1Title" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
            <div class="row p-4">
                <div class="col-12 col-md-5">
                    <img class="img-fluid rounded" src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/user-1-lg.jpg" alt="Nadia Sidko">
                </div>
                <div class="col-12 col-md-7 mt-sm-3">
                    <h5 id="teamUser1Title">Nadia Sidko</h5>
                    <small class="text-muted mb-0 ">Blockchain Entrepreneur</small>
                    <div class="social-profile">
                        <a href="#" title="Linkedin" class="font-medium grey-accent2 mr-2"><i class="ti-linkedin"></i></a>
                        <a href="#" title="Twitter" class="font-medium grey-accent2 mr-2"><i class="ti-twitter-alt"></i></a>
                        <a href="#" title="Github" class="font-medium grey-accent2"><i class="ti-github"></i></a>
                    </div>
                    <div class="my-4">
                        <p>Experienced algorithmic crypto trader and a machine learning evangelist.</p>
                        <p>I’m focusing on the logic behind the combination of analysis tools, neural networks and genetic algorithms for optimization. Always wanted to have a trading bot with more features but never had the time to build a solution beyond basic python technical analysis tracker.</p>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">Blockchain</small> <small class="float-right">85%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">Python</small> <small class="float-right">90%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">C++</small> <small class="float-right">75%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Team user popup - teamUser8 -->
<div class="modal team-modal fade" id="teamUser8" tabindex="-1" role="dialog" aria-labelledby="teamUser8Title" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
            <div class="row p-4">
                <div class="col-12 col-md-5">
                    <img class="img-fluid rounded" src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/user-8-lg.jpg" alt="Pavel Volek">
                </div>
                <div class="col-12 col-md-7 mt-sm-3">
                    <h5 id="teamUser8Title">Pavel Volek</h5>
                    <small class="text-muted mb-0 ">Entrepreneur and Investor</small>
                    <div class="social-profile">
                        <a href="#" title="Linkedin" class="font-medium grey-accent2 mr-2"><i class="ti-linkedin"></i></a>
                        <a href="#" title="Twitter" class="font-medium grey-accent2 mr-2"><i class="ti-twitter-alt"></i></a>
                        <a href="#" title="Github" class="font-medium grey-accent2"><i class="ti-github"></i></a>
                    </div>
                    <div class="my-4">
                        <p>Experienced algorithmic crypto trader and a machine learning evangelist.</p>
                        <p>I’m focusing on the logic behind the combination of analysis tools, neural networks and genetic algorithms for optimization. Always wanted to have a trading bot with more features but never had the time to build a solution beyond basic python technical analysis tracker.</p>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">Blockchain</small> <small class="float-right">85%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">Python</small> <small class="float-right">90%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">C++</small> <small class="float-right">75%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Team user popup - teamUser3 -->
<div class="modal team-modal fade" id="teamUser3" tabindex="-1" role="dialog" aria-labelledby="teamUser3Title" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
            <div class="row p-4">
                <div class="col-12 col-md-5">
                    <img class="img-fluid rounded" src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/user-3-lg.jpg" alt="Alyona Blakytna">
                </div>
                <div class="col-12 col-md-7 mt-sm-3">
                    <h5 id="teamUser3Title">Alyona Blakytna</h5>
                    <small class="text-muted mb-0 ">Fin-Tech Entrepreneur</small>
                    <div class="social-profile">
                        <a href="#" title="Linkedin" class="font-medium grey-accent2 mr-2"><i class="ti-linkedin"></i></a>
                        <a href="#" title="Twitter" class="font-medium grey-accent2 mr-2"><i class="ti-twitter-alt"></i></a>
                        <a href="#" title="Github" class="font-medium grey-accent2"><i class="ti-github"></i></a>
                    </div>
                    <div class="my-4">
                        <p>Experienced algorithmic crypto trader and a machine learning evangelist.</p>
                        <p>I’m focusing on the logic behind the combination of analysis tools, neural networks and genetic algorithms for optimization. Always wanted to have a trading bot with more features but never had the time to build a solution beyond basic python technical analysis tracker.</p>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">Blockchain</small> <small class="float-right">85%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">Python</small> <small class="float-right">90%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">C++</small> <small class="float-right">75%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Team user popup - teamUser11 -->
<div class="modal team-modal fade" id="teamUser11" tabindex="-1" role="dialog" aria-labelledby="teamUser11Title" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
            <div class="row p-4">
                <div class="col-12 col-md-5">
                    <img class="img-fluid rounded" src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/user-11-lg.jpg" alt="Martin Solarik">
                </div>
                <div class="col-12 col-md-7 mt-sm-3">
                    <h5 id="teamUser11Title">Martin Solarik</h5>
                    <small class="text-muted mb-0 ">Fin-Tech Investor</small>
                    <div class="social-profile">
                        <a href="#" title="Linkedin" class="font-medium grey-accent2 mr-2"><i class="ti-linkedin"></i></a>
                        <a href="#" title="Twitter" class="font-medium grey-accent2 mr-2"><i class="ti-twitter-alt"></i></a>
                        <a href="#" title="Github" class="font-medium grey-accent2"><i class="ti-github"></i></a>
                    </div>
                    <div class="my-4">
                        <p>Experienced algorithmic crypto trader and a machine learning evangelist.</p>
                        <p>I’m focusing on the logic behind the combination of analysis tools, neural networks and genetic algorithms for optimization. Always wanted to have a trading bot with more features but never had the time to build a solution beyond basic python technical analysis tracker.</p>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">Blockchain</small> <small class="float-right">85%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">Python</small> <small class="float-right">90%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">C++</small> <small class="float-right">75%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Team user popup - teamUser7 -->
<div class="modal team-modal fade" id="teamUser7" tabindex="-1" role="dialog" aria-labelledby="teamUser7Title" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
            <div class="row p-4">
                <div class="col-12 col-md-5">
                    <img class="img-fluid rounded" src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/user-7-lg.jpg" alt="Kate Fisenko">
                </div>
                <div class="col-12 col-md-7 mt-sm-3">
                    <h5 id="teamUser7Title">Kate Fisenko</h5>
                    <small class="text-muted mb-0 ">Fin-Tech Investor</small>
                    <div class="social-profile">
                        <a href="#" title="Linkedin" class="font-medium grey-accent2 mr-2"><i class="ti-linkedin"></i></a>
                        <a href="#" title="Twitter" class="font-medium grey-accent2 mr-2"><i class="ti-twitter-alt"></i></a>
                        <a href="#" title="Github" class="font-medium grey-accent2"><i class="ti-github"></i></a>
                    </div>
                    <div class="my-4">
                        <p>Experienced algorithmic crypto trader and a machine learning evangelist.</p>
                        <p>I’m focusing on the logic behind the combination of analysis tools, neural networks and genetic algorithms for optimization. Always wanted to have a trading bot with more features but never had the time to build a solution beyond basic python technical analysis tracker.</p>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">Blockchain</small> <small class="float-right">85%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">Python</small> <small class="float-right">90%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">C++</small> <small class="float-right">75%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Team user popup - teamUser12 -->
<div class="modal team-modal fade" id="teamUser12" tabindex="-1" role="dialog" aria-labelledby="teamUser12Title" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
            <div class="row p-4">
                <div class="col-12 col-md-5">
                    <img class="img-fluid rounded" src="https://pixinvent.com/demo/crypto-ico/theme-assets/images-3d-animation/user-12-lg.jpg" alt="Michal Krajnansky">
                </div>
                <div class="col-12 col-md-7 mt-sm-3">
                    <h5 id="teamUser12Title">Michal Krajnansky</h5>
                    <small class="text-muted mb-0 ">Blockchain Entrepreneur</small>
                    <div class="social-profile">
                        <a href="#" title="Linkedin" class="font-medium grey-accent2 mr-2"><i class="ti-linkedin"></i></a>
                        <a href="#" title="Twitter" class="font-medium grey-accent2 mr-2"><i class="ti-twitter-alt"></i></a>
                        <a href="#" title="Github" class="font-medium grey-accent2"><i class="ti-github"></i></a>
                    </div>
                    <div class="my-4">
                        <p>Experienced algorithmic crypto trader and a machine learning evangelist.</p>
                        <p>I’m focusing on the logic behind the combination of analysis tools, neural networks and genetic algorithms for optimization. Always wanted to have a trading bot with more features but never had the time to build a solution beyond basic python technical analysis tracker.</p>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">Blockchain</small> <small class="float-right">85%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">Python</small> <small class="float-right">90%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h6 class="mb-0"><small class="text-uppercase">C++</small> <small class="float-right">75%</small></h6>
                    <div class="progress box-shadow-1 mb-4">
                        <div class="progress-bar progress-orange" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    </main>
  </div>
</div>
<!-- //////////////////////////////////// FOOTER ////////////////////////////////////-->

<script type="text/javascript">

  function copyContract() {
    var copyText = document.getElementById("smartcontractaddress");

    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */

    document.execCommand("copy");

    alert("Text copied to clipboard");
  }

</script>

@stop