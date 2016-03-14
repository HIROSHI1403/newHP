<?php require_once "./default.php" ?>

<!DOCTYPE html>
<html>
<head>
	<?php tmp_header_meta(); ?>
    <link rel="stylesheet" type="text/css" href="./css/ryu_custom_rec.css">
</head>
<body>
	<?php defnavbar(); ?>
	<!-- Header -->
    <section id="breadcrumb_nav">
        <!-- <div class="container-fluid"> -->
            <div class="row row-10">
                <?php breadcrumbs(2,'リクルート','./recruit_top.php','インタビュー','','',''); ?>
            </div>
        <!-- </div> -->
    </section>
    <section id="interview_top" class="padding-top50">
        <div class="container">
            <div class="row row-0 text-center">
                <div class="col-lg-12">
                    <h1 class="page-header">INTERVIEW</h1>
                    <p class="">社員の声＜インタビュー＞</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container" id="interview_top_message">
            <div class="row row-0 text-center">
                <div class="col-lg-12">
                    <h1 class="" id="">社員のインタビュー内容を掲載しています！</h1>
                    <hr class="large">
                    <p class="lead ">何気ない話や、仕事の話、実は「◯◯です！」なんて話も掲載しています！</p>
                </div>
            </div>
        </div>
    </section>
    <?php tmp_rec_nav(); ?>
    <section>
        <div class="container" id="interview_top_main">
            <div class="row row-0 text-center">
                <div class="col-lg-12">
                    <h1 class="page-header" id="">現場で活躍する先輩たち</h1>
                    <div class="col-sm-4 col-md-2 margin10 text-center hover14 column">
                        <a href="#" type="button" data-toggle="modal" data-target="#interview1">
                            <figure><img src="./img/interview/mk3.jpg" class="img-responsive img-center" alt="求人媒体"></figure>
                        </a>
                        <p>未来を見る！</p>
                    </div>
                    <div class="modal fade bs-example-modal-lg text-left" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="interview1">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="row row-20">
                                    <div class="col-sm-4">
                                        <img src="./img/interview/mk2.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-sm-7">
                                        <h4 class="page-header">Ｍ・Ｋ</h4>
                                        <p><u><strong><i class="fa fa-question-circle"></i> 今やっているお仕事を教えて下さい。</strong></u></p>
                                        <p>ざっくりで言うと基盤開発。細かく言うと、とあるシステムのHULFT（ハルフト）の導入から設計構築。現行のシステムもあるので、そこの保守も。本当にHULFTは全般というイメージですね！</p>

                                        <p><u><strong><i class="fa fa-question-circle"></i> 最近仕事であったいいことってなんですか？</strong></u></p>
                                        <p>えぇっと、最近のこの業務で言えば、まあ重い仕事が片付いたかなと。なのでその重い仕事が終わるまでは稼動もカツカツで突発的な仕事というか、ヒアリングというか業務からの質問も手一杯とういう状況もすごいあるんですけど、一個ずつ片付けて…子育てと一緒っすね！設計導入やるにあたって、本番稼動した後って自動化で動かしたりするんですけど、その自動化。言ってしまえば、他の領域というか、みんなのタスク申請も面倒見るところまで！まぁやればやるほど知識は付くんで、どんどんどんどん。</p>

                                        <p><u><strong><i class="fa fa-question-circle"></i> うちの会社ってどうですか？</strong></u></p>
                                        <p>しっかり安定する感じです！伝わります？（笑）</p>

                                        <p><u><strong><i class="fa fa-question-circle"></i> 入社して、何が一番変化しましたか？</strong></u></p>
                                        <p>変化したもの・・・いやもうキリがないぐらいあるんですけど…んー。なんだろな、一番大きいこと、やっぱり現場のリーダーになってからですかね！自分の発言ひとつひとつ、なんというか、メンバーもそうなんですけど、良い方向に向かわせようって発言が出来ることです！</p>

                                        <p><u><strong><i class="fa fa-question-circle"></i> そのほか変化したことってなんですか？</strong></u></p>
                                        <p>入社してからでいうと、そもそも人前で話すとか不得意な人間だったので、新卒の講習だったり旅行委員会だったり、多少は態勢はついてきてるかな？勉強中です！</p>

                                        <p><u><strong><i class="fa fa-question-circle"></i> 求めるリーダー像とか人物像を教えて下さい。</strong></u></p>
                                        <p>本来では。。。本来というか自分個人の考えだけでいうと、一番役が高い人がぶっ倒れるまでやればいいかな。背中を見せるわけじゃないですけど、それで下が付いてきてくれたら一番いいなと思うんだけどそれはちょっとなかなか難しいので、先輩のように言えば言うだけメンバーの士気が上がるみたいな能力がほしい！</p>

                                        <p><u><strong><i class="fa fa-question-circle"></i> 入ってくるみんなに一言</strong></u></p>
                                        <p>そうだな。いろいろあるけど苦手分野にチャレンジしてほしいかな、一番嫌なことをやって欲しいと思う！</p>
                                    </div>
                                    <div class="col-sm-1">
                                        <button type="button" class="btn btn-link text-danger" data-dismiss="modal"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-2 margin10 text-center hover14 column">
                        <a href="#" type="button" data-toggle="modal" data-target="#interview2">
                            <figure><img src="./img/interview/mh3.jpg" class="img-responsive img-center" alt="求人媒体"></figure>
                        </a>
                        <p>ここでできる「成長」</p>
                    </div>
                    <div class="modal fade bs-example-modal-lg text-left" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="interview2">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="row row-20">
                                    <div class="col-sm-4">
                                        <img src="./img/interview/mh4.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-sm-7">
                                        <h4 class="page-header">Ｍ・Ｋ</h4>
                                        <p><u><strong><i class="fa fa-question-circle"></i> 今やっているお仕事を教えて下さい。</strong></u></p>
                                        <p>今のシステムでつなげてるVTSを新しいVTSにするんですけど、機器更改に伴って定義を入れたりとか、修正したりとかしてます！</p>

                                        <p><u><strong><i class="fa fa-question-circle"></i> 最近仕事であったいいことってなんですか？</strong></u></p>
                                        <p>お客様に「◯◯◯◯やって！」って依頼される前に、「それすでにやってます」っていうのが言えた時はすごくいいなって思いました！お客様からも「さすが！」って言ってもらって嬉しかったですね！</p>

                                        <p><u><strong><i class="fa fa-question-circle"></i> うちの会社ってどうですか？</strong></u></p>
                                        <p>周りのみなさんがすごい優しいっていうのもそうなんですけど、あとは意見がいろいろ言えるとか、出る杭を打たないみたいな、なんでも尊重してくれるところがすごいいいと思います。</p>

                                        <p><u><strong><i class="fa fa-question-circle"></i> 入社して、何が一番変化しましたか？</strong></u></p>
                                        <p>すごいITっぽくなりました、頭の中が。（笑）前職は営業だったんですけど。全然パソコンとかも家になくて、ほとんど仕事でもさわんなかったので。この仕事に就いて常に頭が論理的な思考みたいになったなと思います。ようこそITの世界へ。（笑）</p>

                                        <p><u><strong><i class="fa fa-question-circle"></i> そのほか変化したことってなんですか？</strong></u></p>
                                        <p>入社したての頃ってやっぱりITとかも全然しらなかったので、もう不安しかなかったんですけど、なんか自分にできるのかな？とか、どんなことやるんだろうとか、なにも全然わかってなかったんですけど、でも面接のときやる気があれば大丈夫だっていう風にいってくださって、本当にその言葉って本当にそうなんだなって今実感してます。気持ち次第でできるんだなって思います。</p>

                                        <p><u><strong><i class="fa fa-question-circle"></i> 求めるリーダー像とか人物像を教えて下さい。</strong></u></p>
                                        <p>人の気持ちをほんとに考えてくれる上司っていうか、マネージメントするにしても、この人はこういうタイプだからこういう怒り方をしようとか、その人に会った褒め方だったり怒り方あると思うんですけど、そういうのがわかる上司がいいです。</p>

                                        <p><u><strong><i class="fa fa-question-circle"></i> 入ってくるみんなに一言</strong></u></p>
                                        <p>一緒に会社を大きくしていきたいです！</p>
                                    </div>
                                    <div class="col-sm-1">
                                        <button type="button" class="btn btn-link text-danger" data-dismiss="modal"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-2 margin10 text-center hover14 column">
                        <a href="#" type="button" data-toggle="modal" data-target="#interview3">
                            <figure><img src="./img/interview/ms1.jpg" class="img-responsive img-center" alt="求人媒体"></figure>
                        </a>
                        <p>仕事の環境</p>
                    </div>
                    <div class="modal fade bs-example-modal-lg text-left" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="interview3">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="row row-20">
                                    <div class="col-sm-4">
                                        <img src="./img/interview/ms2.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-sm-7">
                                        <h4 class="page-header">Ｍ・Ｓ</h4>
                                        <p><u><strong><i class="fa fa-question-circle"></i> 今やっているお仕事を教えて下さい。</strong></u></p>
                                        <p>仕事の内容は現行システムの保守及び、障害が起きた時の対応時期のシステムの構築、HULFT（ハルフト）の構築と定義登録を行ったり実際にオペに引き渡すときに運用マニュアルを作成をしたりしてます。</p>

                                        <p><u><strong><i class="fa fa-question-circle"></i> 最近仕事であったいいことってなんですか？</strong></u></p>
                                        <p>実際に、開発の仕事をするにあたって、ほぼほぼ自分で調べてやらなければいけないことが多々あって、その中で運用マニュアルであれば自分で作成した物が作成者として名前が残るようなところってのは開発をやらないと味わえないものだと思います。</p>

                                        <p><u><strong><i class="fa fa-question-circle"></i> うちの会社ってどうですか？</strong></u></p>
                                        <p>上司との距離が近いのかなと。例えばお客様。別のお客様方でみてみるとほぼほぼ、例えば部長であったり社長であったりそういう人というのは自分、一般…僕は役職者ですけど、そういう一般人の名前は覚えてない、ほとんど会ったことないって方なんですが社長にあった時に名前で呼ばれるってのは結構他の会社では味わえない所なのかなと</p>

                                        <p><u><strong><i class="fa fa-question-circle"></i> 入社して、何が一番変化しましたか？</strong></u></p>
                                        <p>最初はやはり仕事にするにしても、なんにするにしても個人で仕事してる感覚だったんですけど入社して十年、十年ちょい経過して全体を見るというかうちの会社の一員として働いているいう意識の変化というのは一番変わった所かなと思います</p>

                                        <p><u><strong><i class="fa fa-question-circle"></i> そのほか変化したことってなんですか？</strong></u></p>
                                        <p>今と比べるとあまり人の意見を取り入れられない、自分がこう思ったらそれが正しいと思ってるというところありましたけど年を取るにつれて…（笑）</p>

                                        <p><u><strong><i class="fa fa-question-circle"></i> 求めるリーダー像とか人物像を教えて下さい。</strong></u></p>
                                        <p>ある人と一緒に仕事をする機会がありまして、沢山見習う部分がありました。その人のおかげで考え方が変ったりする部分があったので、自分自身もそういう他のメンバーに影響を与えられるような形になっていければいいなって思います！</p>

                                        <p><u><strong><i class="fa fa-question-circle"></i> 入ってくるみんなに一言</strong></u></p>
                                        <p>この会社のメンバーというか僕、結構いろんなの会社のメンバーと一緒に仕事してきたんですけどもやっぱりうちの会社の人ってみんないい人ばかりなので、その環境で仕事出来るってのはいいことだと思います！いいことって掘り下げるといろいろありますけど、例えば奢ってもらえるとかでもいいですし（笑）、あのいい話聞けるとか、仕事のアドバイスをくれるとかみんな優しいです。仕事のフォローも大事ですけど、仕事だけでなくプライベートでも会ったりそういう付き合いができる人は多いと思うので、凄いメリットだと思います。</p>
                                    </div>
                                    <div class="col-sm-1">
                                        <button type="button" class="btn btn-link text-danger" data-dismiss="modal"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-2 margin10 text-center hover14 column">
                        <a href="#" type="button" data-toggle="modal" data-target="#interview4">
                            <figure><img src="./img/interview/yk1.jpg" class="img-responsive img-center" alt="求人媒体"></figure>
                        </a>
                        <p>辛いことも乗り越えられる！</p>
                    </div>
                    <div class="modal fade bs-example-modal-lg text-left" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="interview4">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="row row-20">
                                    <div class="col-sm-4">
                                        <img src="./img/interview/yk2.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-sm-7">
                                        <h4 class="page-header">Ｙ・Ｎ</h4>
                                        <p><u><strong><i class="fa fa-question-circle"></i> 今やっているお仕事を教えて下さい。</strong></u></p>
                                        <p>メインフレームの開発環境で日時作業や定常作業をしています。言語はPL1などを使って操作してます。ほかのドキュメントは結構多めにエクセルを使ったりして作業していますよ！</p>

                                        <p><u><strong><i class="fa fa-question-circle"></i> 最近仕事であったいいことってなんですか？</strong></u></p>
                                        <p>仕事もそうですけど、業後とかで他の人たちと遊びに行くのが楽しい一番ですね！とってもフレンドリーに接してくれるので楽しいです！ダーツとかに遊びにいくんだったらつい最近までは1週間に1回とかにはありました（笑）</p>

                                        <p><u><strong><i class="fa fa-question-circle"></i> うちの会社ってどうですか？</strong></u></p>
                                        <p>一言でいいますと、フレンドリー。とにかくフレンドリーだなと！普通の会社、他の友人とかの会社の話を聞いてても上司の方と一緒飲みに行くことはまず少なかったり、他の人と仲良くできない特に情報関係の仕事は特に少ない。現場単位でも会社単位でもフレンドリーだと思ってます。</p>

                                        <p><u><strong><i class="fa fa-question-circle"></i> 入社して、何が一番変化しましたか？</strong></u></p>
                                        <p>たくさんあるんですけど、まず一つ、簡単なことなんですけど一度覚えたこと、一度言われたこととかを忘れないようにメモ取る習慣がつきました。後は、少しでも色んな人と話せるように足を動かしてちゃんと話を聞きにいったりしてますね。フットワーク軽く。そしてなによりですけど、お酒飲む時の自分の限界を知ってちゃんと適量で飲めるかどうかですかね。自分も失敗しましたので。</p>

                                        <p><u><strong><i class="fa fa-question-circle"></i> そのほか変化したことってなんですか？</strong></u></p>
                                        <p>昔をみて、入社当時の自分を見て、もっともっとそのままでいれば良かったなと、思ってます。そのままの自分で性格面でいて欲しかったです（笑）いい意味でも悪い意味でも慎重になってるかもしれません（笑）</p>

                                        <p><u><strong><i class="fa fa-question-circle"></i> 求めるリーダー像とか人物像を教えて下さい。</strong></u></p>
                                        <p>すでに社内にいます！自分の中の感想は兄貴ですね。あえて言うなら、普段は優しい感じで教えてくれて、怒るときはしっかり怒って、けどいざという時には引っ張ってくれそう。見捨てない人だと思いますね。</p>
                                    </div>
                                    <div class="col-sm-1">
                                        <button type="button" class="btn btn-link text-danger" data-dismiss="modal"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-2 margin10 text-center hover14 column">
                        <a href="#" type="button" data-toggle="modal" data-target="#interview5">
                            <figure><img src="./img/interview/se1.jpg" class="img-responsive img-center" alt="求人媒体"></figure>
                        </a>
                        <p><i class="fa fa-bullhorn"></i> 宣伝！<br>乗ってくれ！</p>
                    </div>
                    <div class="modal fade bs-example-modal-lg text-left" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="interview5">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="row row-20">
                                    <div class="col-sm-4">
                                        <img src="./img/interview/se3.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-sm-7">
                                        <h4 class="page-header">Ｓ・Ｅ（宣伝！です！）</h4>
                                        <p><u><strong><i class="fa fa-bullhorn"></i> 年に一度の「社員旅行」</strong></u></p>
                                        <p>我々には年に１度「社員旅行」という行事があります！社長・役員をはじめ各役職の人から、新入社員まで全員が参加対象です！そんな社員旅行では、各地域の観光名所をめぐったり、温泉や歓楽街を楽しんだり、夜は食事・飲み会をしながら有志の出し物や楽しい進行（MC）様々なイベントが催され、各現場や知らない人々とも進行を深めたりすることができます！近年減ってきた「社員旅行」。ぜひ我が社で体験してみませんか？きっと思い出として、日々の活力として楽しんでいただけると思います！</p>
                                    </div>
                                    <div class="col-sm-1">
                                        <button type="button" class="btn btn-link text-danger" data-dismiss="modal"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-2 margin10 text-center hover14 column">
                        <a href="#" type="button" data-toggle="modal" data-target="#interview6">
                            <figure><img src="./img/interview/ta1.jpg" class="img-responsive img-center" alt="求人媒体"></figure>
                        </a>
                        <p>成功するも失敗するも「自分次第」</p>
                    </div>
                    <div class="modal fade bs-example-modal-lg text-left" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="interview6">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="row row-20">
                                    <div class="col-sm-4">
                                        <img src="./img/interview/ta2.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-sm-7">
                                        <h4 class="page-header">Ａ・Ｔ</h4>
                                        <p><u><strong><i class="fa fa-question-circle"></i> 今やっているお仕事を教えて下さい。</strong></u></p>
                                        <p>僕の場合は機器関連です。見積もりはベンダーさんベンダーが取ってくれるんですけど、そこから電源の見積もりとかフロアの設置までですね、あとは上のレイヤー層のOS・ミドルウェアとかです。あとは開発保守。自分がいるところは、開発だけじゃなくて保守も入ってるんで、本番に運用部の方に本番稼働カットオーバー・リリースした後の稼働ですかね。ステーション替えが起きたら自分のところに連絡きますから、その対応等ですね。なんで機器全般のハードエラーだったら実機を代えないといけないので調整とかもしますね！</p>

                                        <p><u><strong><i class="fa fa-question-circle"></i> 大変ですか？</strong></u></p>
                                        <p>いやぁ最初入った時はちょっとつらかったですね。ITだからやっぱりルールって細かいので。僕セキュリティーガチガチ堅めてるの嫌いなんですよ（笑）しっかり守りますけどね！自分は仮想基盤の方からきてるんで、現場に来た当初は仲間に電話して「もうキツいっす。」「無理っすわ」っていうのをちょいちょい電話しちゃいましたね。でもそんなことも言い合える仲間大切ですよ！髪の毛ぬけるし、白髪多くなるしそれは嫌っすね！冗談ですけど（笑）、最近は業務の色というか１年もいればしっかり染まってくるんで、いい環境と家からも近いのでまあ良いかなって最近思ってますね！</p>

                                        <p><u><strong><i class="fa fa-question-circle"></i> うちの会社ってどうですか？</strong></u></p>
                                        <p>この前ウチの会社に紹介した人が居たんですけど、その人に「等身大の休日の俺を見てくれ」とか「楽しそうでしょ？おれの休日」って言ったら、「めっちゃ楽しそうっす！」って毎回ずっと。うちの会社に紹介する前も会ってて二人で朝までカラオケとかも行ってたんですけど、休日のリセットとON/OFFが素晴らしいと。就活で困ってて一回実家に帰るみたいなこと言ってたんですけど、こっちでの繋がり全部捨てて帰るとか言ってて…でまぁ、だったらうちで「俺見てどう思う？」って言ったら「めっちゃ楽しそうです」って「じゃあうちどう？」って言って人事部相談して、社員旅行の次の月曜日にとある駐車場で電話して…ってそんな感じですね。伝わりました？（笑）</p>

                                        <p><u><strong><i class="fa fa-question-circle"></i> うちに入社した頃とかあの頃はどうだったっていう客観的にどういった自分でした？</strong></u></p>
                                        <p>若かったですね、実に若かった。年もそうですけど考えもそうだし行動も若いし、仕事に対するモチベーションも若いし…そんなだったかなと。いい意味でも悪い意味でもですよ。何かしらやる事に対しても結構若さって一つの武器になると思うんで、名前覚えてもらわないとダメだったんで昔って結構、本当に誰とも喋るとか社員旅行毎回行って社長とか役員とかに名前覚えて貰わないといけなかったので。取り合えず行く。そこに論理はないですよね何もないですね。体一つ。裸一貫で。（笑）</p>

                                        <p><u><strong><i class="fa fa-question-circle"></i> 変化したことってなんですか？</strong></u></p>
                                        <p>変化は人と話すようになりましたね。話したりはしてたんですけど裾野が広がるというか、自分の話し方、この人にはこう言う話し方するとか、この人はこうだなという感じ。うちの会社って色んな経験してる人が入ってきてるので、本当にITじゃない方面からはいってる人のほうが僕が入った時多くて、僕もそうなんですけどで、その人たちが居たので色々話し方変わったなって思ってます。僕の前居た会社って六本木のIT会社だったんですけどそこはガッチガチのITでそこまで話さないし横の繋がりがなくて。</p>

                                        <p><u><strong><i class="fa fa-question-circle"></i> 求めるリーダー像とか人物像を教えて下さい。</strong></u></p>
                                        <p>あるチームで問題が起きてトップまでエスカレーションして頼ってばっかりじゃなく自分でしっかり解決できるリーダー格を育てられるリーダーみたいな感じに僕はなりたいです！</p>

                                    </div>
                                    <div class="col-sm-1">
                                        <button type="button" class="btn btn-link text-danger" data-dismiss="modal"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-sm-12 col-md-12 margin10 text-center hover12 column"></div>



                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container" id="interview_top_main">
            <div class="row row-10 text-center">
                <div class="col-lg-12">
                    <h1 class="page-header" id="">先輩の仕事タイムスケジュール</h1>
                </div>

                <div class="col-lg-6">
                    <div class="panel panel-default panel-radius-0">
                        <div class="panel-heading">
                            <h3 class="panel-title">システム運用部</h3>
                            <p class="text-muted">Ｉさんのとある一日の流れ</p>
                        </div>
                        <div class="panel-body text-left">
                            <h4 class="page-header"><i class="fa fa-black-tie"></i> タイムスケジュール</h4>
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-badge success"><i class="glyphicon glyphicon-time"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">6:30〜：起床</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge success"><i class="glyphicon glyphicon-time"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">9:00〜：出社</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <ul class="list-unstyled">
                                                <li>メールチェック</li>
                                                <li>書類チェック（依頼書）</li>
                                                <li>依頼申請</li>
                                                <li>障害１次対応</li>
                                                <li>パッチ当て</li>
                                                <li>プログラムリリース</li>
                                                <li>運用マニュアル作成</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge success"><i class="glyphicon glyphicon-time"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">11:00〜：案件対応</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <ul class="list-unstyled">
                                                <li>リリース案件対応</li>
                                                <li>スケジュール調整</li>
                                                <li>月次データ蓄積</li>
                                                <li>定常業務など</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge success"><i class="glyphicon glyphicon-time"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">12:00〜13:00：お昼</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge success"><i class="glyphicon glyphicon-time"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">13:00〜：担当業務</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <ul class="list-unstyled">
                                                <li>報告書等</li>
                                                <li>お客様調整</li>
                                                <li>ツール作成</li>
                                                <li>設計書→テスト→レビュー</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge success"><i class="glyphicon glyphicon-time"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">17:15〜</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <ul class="list-unstyled">
                                                <li>お客様とミーティング</li>
                                                <li>折衝</li>
                                                <li>開発ミーティング</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge success"><i class="glyphicon glyphicon-time"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">18:00〜20:30：残業</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge success"><i class="glyphicon glyphicon-time"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">20:30：業務終了</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <ul class="list-unstyled">
                                                <li>プライベート時間</li>
                                                <li>└運動（ランニング等）</li>
                                                <li>家族奉仕等</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge success"><i class="glyphicon glyphicon-time"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">0:00：就寝</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </div>
                        <div class="panel-footer">
                            <h4 class="page-header"><i class="fa fa-microphone"></i>　将来どのような仕事をしていたいですか？</h4>
                            <p class="lead"><span class="text-red">運用</span>を<strong>極める！</strong></p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="panel panel-default panel-radius-0">
                        <div class="panel-heading">
                            <h3 class="panel-title">システム基盤部</h3>
                            <p class="text-muted">Ｎさんのとある一日の流れ</p>
                        </div>
                        <div class="panel-body text-left">
                            <h4 class="page-header"><i class="fa fa-black-tie"></i> タイムスケジュール</h4>
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-badge success"><i class="glyphicon glyphicon-time"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">6:30〜：起床</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge success"><i class="glyphicon glyphicon-time"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">8:30〜：出社</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <ul class="list-unstyled">
                                                <li>メールチェック</li>
                                                <li>ネットワーク稼働チェック</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge success"><i class="glyphicon glyphicon-time"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">9:00〜：内部ミーティング等</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge success"><i class="glyphicon glyphicon-time"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">12:00〜13:00：お昼</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge success"><i class="glyphicon glyphicon-time"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">13:00〜：担当業務</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <ul class="list-unstyled">
                                                <li>スクリプト作りこみ</li>
                                                <li>（シェルスクリプト等）</li>
                                                <li>更新作業（管理データ）</li>
                                                <li>ネットワーク設計書作り</li>
                                                <li>お客様と要件ミーティング</li>
                                                <li>ネットワーク配線業務</li>
                                                <li>定例MTG</li>
                                                <li>等</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge success"><i class="glyphicon glyphicon-time"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">17:15〜：業務終了</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <ul class="list-unstyled">
                                                <li>プライベートの時間有効活用</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge success"><i class="glyphicon glyphicon-time"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">0:00：就寝</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </div>
                        <div class="panel-footer">
                            <h4 class="page-header"><i class="fa fa-microphone"></i>　将来どのような仕事をしていたいですか？</h4>
                            <p class="lead"><span class="text-red">マネージャー</span>の立場で、<span class="text-red">技術者</span>としてはもちろんですが、<span class="text-red">技術者教育</span>を同時に行いたいです。新人の叩き上げを行い<span class="text-red">我が社をもっと大きく</span>したいです！</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                </div>


                <div class="col-lg-6">
                    <div class="panel panel-default panel-radius-0">
                        <div class="panel-heading">
                            <h3 class="panel-title">システム開発部</h3>
                            <p class="text-muted">Ｓさんのとある一日の流れ</p>
                        </div>
                        <div class="panel-body text-left">
                            <h4 class="page-header"><i class="fa fa-black-tie"></i> タイムスケジュール</h4>
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-badge success"><i class="glyphicon glyphicon-time"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">6:30〜：起床</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge success"><i class="glyphicon glyphicon-time"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">8:30〜：出社</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <ul class="list-unstyled">
                                                <li>メールチェック</li>
                                                <li>ミーティング</li>
                                                <li>進捗確認</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge success"><i class="glyphicon glyphicon-time"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">8:45〜：プログラムのテスト準備</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge success"><i class="glyphicon glyphicon-time"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">12:00〜13:00：お昼</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge success"><i class="glyphicon glyphicon-time"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">13:00〜：担当業務</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <ul class="list-unstyled">
                                                <li>プログラムのテスト</li>
                                                <li>プログラムの修正</li>
                                                <li>お客様からのお問い合わせ対応</li>
                                                <li>エンドユーザ様（TEL）</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge success"><i class="glyphicon glyphicon-time"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">17:00〜</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <ul class="list-unstyled">
                                                <li>チーム内（6名程）ミーティング</li>
                                                <li>進捗の確認等</li>
                                                <li>その他修正</li>
                                                <li>その他開発等</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge success"><i class="glyphicon glyphicon-time"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">20:00：業務終了</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <ul class="list-unstyled">
                                                <li>プライベート時間</li>
                                                <li>飲み会や情報収集、ゲームなど</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge success"><i class="glyphicon glyphicon-time"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">0:00：就寝</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </div>
                        <div class="panel-footer">
                            <h4 class="page-header"><i class="fa fa-microphone"></i>　将来どのような仕事をしていたいですか？</h4>
                            <p class="lead"><span class="text-bule">自身の技術力</span>及び<span class="text-bule">コミュニケーション能力向上</span>を図り<span class="text-bule">お客様に信頼されるシステムエンジニア</span>で活躍したい！</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="panel panel-default panel-radius-0">
                        <div class="panel-heading">
                            <h3 class="panel-title">サービスサポート部</h3>
                            <p class="text-muted">Ｋさんのとある一日の流れ</p>
                        </div>
                        <div class="panel-body text-left">
                            <h4 class="page-header"><i class="fa fa-black-tie"></i> タイムスケジュール</h4>
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-badge success"><i class="glyphicon glyphicon-time"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">7:00〜：起床</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge success"><i class="glyphicon glyphicon-time"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">9:00〜：出社</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <ul class="list-unstyled">
                                                <li>メールチェック（個人、サポートセンター等）</li>
                                                <li>予定表チェック</li>
                                                <li>お問い合わせTEL対応</li>
                                                <li>お問い合わせメール対応等</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge success"><i class="glyphicon glyphicon-time"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">12:00〜13:00：お昼</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge success"><i class="glyphicon glyphicon-time"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">13:00〜18:00：担当業務</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <ul class="list-unstyled">
                                                <li>お問い合わせTEL対応</li>
                                                <li>お問い合わせメール対応等</li>
                                                <li>後輩フォロー</li>
                                                <li>お客様とMTG</li>
                                                <li>トラブル対応（一次対応）</li>
                                                <li>内部システム利用者向け対応</li>
                                                <li>ID管理運用</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge success"><i class="glyphicon glyphicon-time"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">18:00〜19:00：個人業務消化</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <ul class="list-unstyled">
                                                <li>案件のリリース対応</li>
                                                <li>教育用資料作成・更新</li>
                                                <li>チーム内部資料作成・更新</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge success"><i class="glyphicon glyphicon-time"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">19:00：業務終了</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <ul class="list-unstyled">
                                                <li>プライベート時間</li>
                                                <li>└ショッピング</li>
                                                <li>└料理・読書等</li>
                                                <li></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge success"><i class="glyphicon glyphicon-time"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">0:00：就寝</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </div>
                        <div class="panel-footer">
                            <h4 class="page-header"><i class="fa fa-microphone"></i>　将来どのような仕事をしていたいですか？</h4>
                            <p class="lead">顧客に、より安定した価値を提供するため<span class="text-red">自分自身のステップアップ</span>はもちろん、<span class="text-red">部下の能力向上</span>なども視野に入れて日々仕事に励んでいたいです。</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <aside class="rotat">
        <div class="rotat_inner">
            <h1 class="" id="rec"><i class="fa fa-phone-square"></i> ENTRY／CONTACT <i class="fa fa-envelope"></i></h1>
            <P>エントリー・コンタクト</P>
            <hr class="medium">
            <p class="small"><p>気になったらすぐに応募ください！あなたの第一歩をサポート！</p></p>
            <a href="./access.php" class="btn btn-dark btn-lg chaffle" data-lang="ja-hiragana"><i class="fa fa-angle-right"></i> 今すぐ応募ページへ！</a>
        </div>
   </aside>

    <?php tmp_footer(); ?>

	<?php tmp_footer_js(); ?>

    <script src="./js/t.min.js"></script>
    <script>
        $(function(){
            $('.type').t({
                blink:true,
                speed_vary:true,
                mistype:true,
            });
        });

        $(".rec_top").bgswitcher({
            images: ['./img/rectop.jpg', 1, 2],
            effect: "drop",
        });

        $('#recruit-menu a').click(function (e) {
          e.preventDefault()
          $(this).tab('show')
        })
    </script>
</body>
</html>