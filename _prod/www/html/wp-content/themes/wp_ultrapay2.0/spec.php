<?php
/*
template Name: カードの種類
*/
?>

  <?php get_header(); ?>
  
  <main> 
    <!--Top Visual-->
    <section class="sub_top spec_top_visual">
      <div>
        <h1>カードの種類</h1>
        <p>
          ultra pay カードには<br>
          ニーズに応じた3種類のカードをご用意しています
        </p>
      </div>
    </section>
    <!--//Top Visual-->
    
    <!--各カード-->    
    <section>
      <div class="sub_spec flex_center flex_rv pc_inner">
        <div>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/degina_img.png" alt="でじなカード">
        </div> 
        <div class="inner">
          <div>
            <h2 class="sub_section_title">でじなカード</h2>
            <p class="sub_section_mg">
              国内外のオンラインショッピングでのみ使えるカード。アプリをインストールすると、すぐに発行できます。
            </p>
          </div>  
          <a class="btn_1" href="#link_spec">
            <div>詳しくはこちら</div>
          </a>
        </div>
      </div>
    </section>
    <section class="bg_gray">
      <div class="sub_spec flex_center pc_inner">
        <div class="">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sotona_img.png" alt="そとなカード">
        </div>
        <div class="inner">
          <div class="">
            <h2 class="sub_section_title">そとなカード</h2>
            <p class="sub_section_mg">
              本人確認不要で、コンビニなど街中のお店でも使えるカード。アプリから申し込むと発行できます。
            </p>
          </div>  
          <a class="btn_1" href="#link_spec">
            <div>詳しくはこちら</div>
          </a>
        </div>
      </div>
    </section>
    <section>
      <div class="sub_spec flex_center flex_rv pc_inner">
        <div class="">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sotonaplus_img.png" alt="そとなカード+">
        </div>
        <div class="inner">
          <div class="">
            <h2 class="sub_section_title">そとなカード+</h2>
            <p class="sub_section_mg">
              国内でも海外でも、オンラインショッピングや街中のお店どちらでも使えるカード。本人確認できるものをご用意の上、アプリから申し込むと発行できます。
            </p>
          </div>  
          <a class="btn_1" href="#link_spec">
            <div>詳しくはこちら</div>
          </a>
        </div>
      </div>
    </section>    
    <!--//各カード-->
    
    <!--カード仕様-->     
    <section class="bg_gray pb_100 spec_detail" id="link_spec">
      <div class="pc_inner">
        <h2 class="sub_section_title text_center">カードの仕様</h2>
        <table class="spec_table">
          <tr>
            <th class="spec_table_none"></th>
            <th class="spec_card_name spec_digina">
              <p>でじな<br class="sp">カード </p>
              <div class="spec_card_bg">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/spec_digina.png" alt="digina card">
              </div>
            </th>
            <th class="spec_card_name spec_sotona">
              <p>そとな<br class="sp">カード</p>
              <div class="spec_card_bg">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/spec_sotona.png" alt="sotona card">
              </div>
            </th>
            <th class="spec_card_name spec_sotonaplus">
              <p>そとな<br class="sp">カード+</p>
              <div class="spec_card_bg">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/spec_sotonaplus.png" alt="sotona+ card">
              </div>
            </th>
          </tr>
          <tr class="bg_white">
            <td>国内のVisa加盟店(※1)利用</td>
            <td>オンライン決済のみ</td>
            <td>〇</td>
            <td>〇</td>
          </tr>
          <tr>
            <td>海外のVisa加盟店利用</td>
            <td>オンライン決済のみ</td>
            <td>オンライン決済のみ</td>
            <td>〇</td>
          </tr>
          <tr class="bg_white">
            <td>利用できないVisa加盟店</td>
            <td colspan="3">ガソリンスタンド、宿泊施設、航空会社、公共料金、定期支払・定期購買、保険料の支払い、高速道路料金、機内販売、自動券売機など暗証番号が必要なお店、本人認証（３D セキュア）の必要な加盟店、その他特定のお店</td>
            </tr>
          <tr class="">
            <td>年齢制限(※2)</td>
            <td colspan="3">なし</td>
          </tr>
          <tr class="bg_white">
            <td>身分証明書（本人確認手続き）</td>
            <td colspan="2">不要</td>
            <td>必要</td>
           </tr>        
          <tr class="">
            <td>年会費</td>
            <td colspan="3">無料</td>
          </tr>         
          <tr class="bg_white">
            <td>発行手数料(※3)	</td>
            <td>なし</td>
            <td>300円</td>
            <td>500円</td>
           </tr>         
          <tr class="">
            <td>有効期限</td>
            <td colspan="3">5年</td>
            </tr>         
          <tr class="bg_white">
            <td>海外事務手数料(※4)</td>
            <td colspan="3">4%</td>
          </tr>
          <tr class="">
            <td>加盟店利用上限額</td>
            <td colspan="2">10万円/1回<br>12万円/1日<br>12万円/1か月</td>
            <td>50万円/1回<br>50万円/1日<br>200万円/1か月</td>
          </tr>         
          <tr class="bg_white">
            <td>チャージ上限額</td>
            <td colspan="2">3万円/1回<br>10万円/残高<br>12万円/1日<br>12万円/1か月<br>100万円/有効期限内</td>
            <td>100万円/残高<br>200万円/1か月</td>
          </tr> 
          <tr class="">
            <td>チャージ方法(※5)</td>
            <td colspan="2">
              　・セブン銀行ATM<br>
                ・コンビニエンスストア<br>
                ・ペイジー（銀行ATM）<br>
                ・ultra pay カード用ギフトコード<br>
            </td>
            <td>左記に加えて<br>
                ・こんど払い by GMO（※6）
            </td>
          </tr>             
           <tr class="bg_white">
            <td>1回あたり最小チャージ単位<br></td>
            <td colspan="3">100円<br><br>ただし、セブン銀行ATMの場合は、1,000円（2,000円以上/回よりチャージ可能）</td>
          </tr>         
          <tr class="">
            <td>チャージ手数料</td>
            <td colspan="3">無料<br><br>ただし、コンビニエンスストアおよび銀行ATMにて、2,000円未満/回のチャージを行う場合は100円/回<br>
              こんど払い by GMOは、別途手数料が発生します。詳しくはアプリをご確認ください
            </td>
          </tr>         
               
          <tr class="bg_white">
            <td>チャージ額の返金について</td>
            <td colspan="3">一度チャージいただいた残高はご返金することができません</td>
          </tr> 
          <tr class="">
            <td>解約手数料</td>
            <td colspan="3">残っている全残高</td>
          </tr>         
          <tr class="bg_white">
            <td>端末の対応バージョン</td>
            <td colspan="3">iOS：12以降、Android：5.0以降</td>
          </tr>         
        </table>      
        <div class="spec_table_kome inner">
          <p>※1　Visa加盟店とは、Visaのマークがあるお店やオンラインサイトです</p>          
          <p>※2　未成年の方の場合は、発行の際に保護者の同意が必要となります</p>
          <p>※3　再発行時も発行手数料が必要となります</p>
          <p>※4　海外事務手数料とは、海外のVisa加盟店で利用した際の手数料を指します</p>
          <p>※5　ご利用いただけないコンビニエンスストア・金融機関がございます</p>
          <p>※6　チャージにはGMOペイメントゲートウェイ株式会社による審査がございます</p>
        </div> 
      </div>
    </section>
    <!--//カード仕様-->   
    <section class="section_download">
      <div class="pc_inner">
        <div class="download_title">
         まずはアプリを<br class="sp">無料ダウンロード！
        </div>
                <ul class="app_link">
                  <li>
                    <a href="https://ultra-pay.onelink.me/0HFY/6b6960dd" target="_blank">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/AppStore_btn.png" alt="App Store">
                    </a>
                  </li>
                  <li>
                    <a href="https://ultra-pay.onelink.me/XFUp/19ff932d" target="_blank">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/GooglePlay_btn.png" alt="Google Play">
                    </a>
                  </li>
                </ul>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>
