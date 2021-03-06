@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col text-center py-5">
                <p class="display-2">brush</p>
                <div class="pt-5">
                    <p>このサイトでは、ユーザーが書いた毛筆・硬筆の画像を投稿するサイトになります。</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container pb-5">
        <div class="row">
            <div class="col d-flex justify-content-around pb-5">
                <a class="btn btn-info btn-lg" href="/home">{{ 'メインページへ進む' }}</a>
                <a class="btn btn-info btn-lg" href="/profile/{{\Auth::id()}}">{{ 'マイページへ進む' }}</a>
            </div>
        </div>
    </div>

    <div class="container pb-5">
        <div class="row">
            <div class="col">
                <ul class="text-left py-5">
                    登録ユーザーは、本サービスの利用にあたり、以下の各号のいずれかに該当する行為または該当すると当社が判断する行為をしてはなりません。
                    <p>1.法令に違反する行為または犯罪行為に関連する行為</p>
                    <p>2.当社、本サービスの他の利用者またはその他の第三者に対する詐欺または脅迫行為</p>
                    <p>3.公序良俗に反する行為</p>
                    <p>4.当社、本サービスの他の利用者またはその他の第三者の知的財産権、肖像権、プライバイシーの権利、名誉、その他の権利または利益を侵害する行為</p>
                    <p>5.本サービスを通じ、以下に該当し、または該当すると当社が判断する情報を当社または本サービスの他の利用者に送信すること</p>
                    <p>・過度に暴力的または残虐な表現を含む情報</p>
                    <p>・コンピューター・ウィルスその他の有害なコンピューター・プログラムを含む情報</p>
                    <p>・当社、本サービスの他の利用者またはその他の第三者の名誉または信用を毀損する表現を含む情報</p>
                    <p>・過度にわいせつな表現を含む情報</p>
                    <p>・差別を助長する表現を含む情報</p>
                    <p>・自殺、自傷行為を助長する表現を含む情報</p>
                    <p>・薬物の不適切な利用を助長する表現を含む情報</p>
                    <p>・反社会的な表現を含む情報</p>
                    <p>・チェーンメールなどの第三者への情報の拡散を求める情報</p>
                    <p>・他人に不快感を与える表現を含む情報</p>
                    <p>・面識のない異性との出会いを目的とした情報</p>
                    <p>6.本サービスのネットワークまたはシステム等に過度な負荷をかける行為、本サービスの不具合を意図的に利用する行為</p>
                    <p>7.本サービスの運営を妨害するおそれのある行為</p>
                    <p>8.当社のネットワークまたはシステム等に不正にアクセスし、または不正なアクセスを試みる行為</p>
                    <p>9.第三者に成りすます行為</p>
                    <p>10.本サービスの他の利用者のIDまたはパスワードを利用する行為</p>
                    <p>11.当社が事前に許諾しない本サービス上での宣伝、広告、勧誘、または営業行為</p>
                    <p>12.本サービスの他の利用者の情報の収集</p>
                    <p>13.当社、本サービスの他の利用者またはその他の第三者に不利益、損害、不快感を与える行為</p>
                    <p>14.反社会的勢力等への利益供与</p>
                    <p>15.本サービスを利用して行う商行為</p>
                    <p>16.前各号の行為を直接または間接に惹起し、または容易にする行為</p>
                    <p>17.その他、不適切と判断する行為</p>
                </ul>
            </div>
        </div>
    </div>
@endsection
