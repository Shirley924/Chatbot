<?php

global $client, $message, $event;
if (strtolower($message['text']) == "start" || $message['text'] == "開始") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                "type" => "flex",
                "altText" => "helo",
                "contents" => 
                array (
                  'type' => 'bubble',
                  'hero' => 
                  array (
                    'type' => 'image',
                    'url' => 'https://cdn.glitch.com/36287cff-58da-4be9-bbef-148c64c77bce%2Ftree%20of%20life.jfif?1608614945742',
                    'size' => 'full',
                    'aspectRatio' => '20:13',
                    'aspectMode' => 'cover',
                    'action' => 
                    array (
                      'type' => 'uri',
                      'uri' => 'http://linecorp.com/',
                    ),
                  ),
                  'body' => 
                  array (
                    'type' => 'box',
                    'layout' => 'vertical',
                    'contents' => 
                    array (
                      0 => 
                      array (
                        'type' => 'text',
                        'text' => 'WELCOME!',
                        'weight' => 'bold',
                        'size' => 'xl',
                        'align' => 'center',
                      ),
                      1 => 
                      array (
                        'type' => 'box',
                        'layout' => 'vertical',
                        'margin' => 'lg',
                        'spacing' => 'sm',
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'box',
                            'layout' => 'vertical',
                            'spacing' => 'sm',
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'text',
                                'text' => 'Hi! I\'m here to help you earn more knowledge about animals!',
                                'color' => '#666666',
                                'size' => 'sm',
                                'flex' => 5,
                                'align' => 'center',
                                'wrap' => true,
                              ),
                              1 => 
                              array (
                                'type' => 'text',
                                'wrap' => false,
                                'color' => '#666666',
                                'size' => 'sm',
                                'flex' => 5,
                                'text' => 'You can type in following keywords.',
                                'align' => 'center',
                              ),
                              2 => 
                              array (
                                'type' => 'separator',
                                'color' => '#333300',
                              ),
                              3 => 
                              array (
                                'type' => 'text',
                                'wrap' => false,
                                'color' => '#666666',
                                'size' => 'md',
                                'flex' => 5,
                                'text' => 'What can I do for you?',
                                'align' => 'center',
                                'style' => 'normal',
                                'weight' => 'regular',
                                // 'decoration' => 'underline',
                              ),
                            ),
                          ),
                          1 => 
                          array (
                            'type' => 'box',
                            'layout' => 'horizontal',
                            'spacing' => 'sm',
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'button',
                                'style' => 'link',
                                'height' => 'sm',
                                'action' => 
                                array (
                                  'type' => 'message',
                                  'label' => 'intro.',
                                  'text' => 'introduction',
                                ),
                              ),
                              1 => 
                              array (
                                'type' => 'button',
                                'style' => 'link',
                                'height' => 'sm',
                                'action' => 
                                array (
                                  'type' => 'message',
                                  'label' => 'search',
                                  'text' => 'search',
                                ),
                              ),
                              2 => 
                              array (
                                'type' => 'button',
                                'action' => 
                                array (
                                  'type' => 'message',
                                  'label' => 'others',
                                  'text' => 'others',
                                ),
                                'height' => 'sm',
                                'style' => 'link',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                )
            )
            
        )        
    ));
}else if (strtolower($message['text']) == "introduction" || strtolower($message['text']) == "介紹") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            // 0 =>
            // array(
            //     'type' => 'text', //訊息類型 (文字)
            //     'text' => 'Which one do you want to know?' //回復訊息
            // ),
            0 =>
            array(
              "type" => "flex",
              "altText" => "helo",
              "contents" => 
                array (
                  'type' => 'carousel',
                  'contents' => 
                  array (
                    0 => 
                    array (
                      'type' => 'bubble',
                      'hero' => 
                      array (
                        'type' => 'image',
                        'aspectRatio' => '20:13',
                        'aspectMode' => 'cover',
                        'url' => 'https://cdn.glitch.com/36287cff-58da-4be9-bbef-148c64c77bce%2Fbecteria.jfif?1608639987659',
                        'size' => 'full',
                      ),
                      'body' => 
                      array (
                        'type' => 'box',
                        'layout' => 'vertical',
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'box',
                            'layout' => 'baseline',
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'text',
                                'text' => '原核生物界',
                                'align' => 'end',
                                'size' => 'xl',
                                'weight' => 'bold',
                              ),
                              1 => 
                              array (
                                'type' => 'text',
                                'text' => 'Prokaryotae',
                                'style' => 'italic',
                                'color' => '#aaaaaa',
                                'size' => 'lg',
                              ),
                            ),
                          ),
                          1 => 
                          array (
                            'type' => 'text',
                            'text' => '通常由單一原核細胞形成的生物。相對於真核細胞，原核細胞一般沒有細胞內膜、沒有核膜包裹的成型細胞核，細胞內無染色體，DNA鏈未螺旋化，並以游離的形式存在於細胞質中，細胞質內也無任何有膜的細胞器。',
                            'size' => 'sm',
                            'flex' => 5,
                            'wrap' => true,
                          ),
                        ),
                      ),
                      'footer' => 
                      array (
                        'type' => 'box',
                        'layout' => 'vertical',
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'button',
                            'action' => 
                            array (
                              'type' => 'uri',
                              'label' => 'learn more',
                              'uri' => 'http://163.28.10.78/content/junior/bio/tc_wc/textbook/ch10/supply10-2-0.htm',
                            ),
                          ),
                        ),
                      ),
                    ),
                    1 => 
                    array (
                      'type' => 'bubble',
                      'hero' => 
                      array (
                        'type' => 'image',
                        'url' => 'https://cdn.glitch.com/36287cff-58da-4be9-bbef-148c64c77bce%2Fthumbnails%2F%E7%9A%AE.jpg?1608641513949',
                        'size' => 'full',
                        'aspectMode' => 'cover',
                        'aspectRatio' => '20:13',
                      ),
                      'body' => 
                      array (
                        'type' => 'box',
                        'layout' => 'vertical',
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'box',
                            'layout' => 'baseline',
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'text',
                                'text' => '原生生物界',
                                'size' => 'xl',
                                'align' => 'end',
                                'weight' => 'bold',
                              ),
                              1 => 
                              array (
                                'type' => 'text',
                                'text' => 'Protoctista',
                                'style' => 'italic',
                                'align' => 'start',
                                'size' => 'lg',
                                'color' => '#aaaaaa',
                              ),
                            ),
                          ),
                          1 => 
                          array (
                            'type' => 'text',
                            'text' => '我們將真核生物域中，不屬於植物、動物和真菌的真核生物，統稱為原生生物。他們一般個體微小、多數為單細胞、有細胞核和原生質膜包圍的細胞器真核生物。單細胞原生生物雖沒有細胞分化，為了執行各種生物學功能，結構更為複雜。其為多細胞真核生物(植物、真菌、動物)的祖先。',
                            'size' => 'sm',
                            'flex' => 5,
                            'wrap' => true,
                          ),
                        ),
                      ),
                      'footer' => 
                      array (
                        'type' => 'box',
                        'layout' => 'vertical',
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'button',
                            'action' => 
                            array (
                              'type' => 'uri',
                              'label' => 'learn more',
                              'uri' => 'http://163.28.10.78/content/junior/bio/tc_wc/textbook/ch10/supply10-3-0.htm',
                            ),
                          ),
                        ),
                      ),
                    ),
                    2 => 
                    array (
                      'type' => 'bubble',
                      'hero' => 
                      array (
                        'type' => 'image',
                        'aspectRatio' => '20:13',
                        'aspectMode' => 'cover',
                        'url' => 'https://cdn.glitch.com/36287cff-58da-4be9-bbef-148c64c77bce%2Fthumbnails%2Ffungi.png?1608643297325',
                        'size' => 'full',
                      ),
                      'body' => 
                      array (
                        'type' => 'box',
                        'layout' => 'vertical',
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'box',
                            'layout' => 'baseline',
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'text',
                                'text' => '真菌界',
                                'align' => 'end',
                                'weight' => 'bold',
                                'size' => 'xl',
                              ),
                              1 => 
                              array (
                                'type' => 'text',
                                'text' => 'Fungi',
                                'style' => 'italic',
                                'color' => '#aaaaaa',
                                'size' => 'lg',
                              ),
                            ),
                          ),
                          1 => 
                          array (
                            'type' => 'text',
                            'text' => '又稱菌物界，具有以幾丁質為主要成分的細胞壁，與動物同為異營生物，依賴其他生物製造的有機物為碳源，通常以滲透營養的方式取得養分，即分泌酵素分解環境中的有機物後，再以擴散作用將小分子養分吸收到細胞中。真菌不能進行光合作用，其成長型態與植物一樣不能移動，但可以透過菌絲的延長拓展棲地，也能透過經由有性或無性生殖產生的孢子進行長距離的傳播。',
                            'size' => 'sm',
                            'flex' => 5,
                            'wrap' => true,
                          ),
                        ),
                      ),
                      'footer' => 
                      array (
                        'type' => 'box',
                        'layout' => 'vertical',
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'button',
                            'action' => 
                            array (
                              'type' => 'uri',
                              'label' => 'learn more',
                              'uri' => 'https://zh.wikipedia.org/zh-tw/%E7%9C%9F%E8%8F%8C',
                            ),
                          ),
                        ),
                      ),
                    ),
                    3 => 
                    array (
                      'type' => 'bubble',
                      'hero' => 
                      array (
                        'type' => 'image',
                        'aspectRatio' => '20:13',
                        'aspectMode' => 'cover',
                        'url' => 'https://cdn.glitch.com/36287cff-58da-4be9-bbef-148c64c77bce%2Fthumbnails%2Fplant.png?1608648636726',
                        'size' => 'full',
                      ),
                      'body' => 
                      array (
                        'type' => 'box',
                        'layout' => 'vertical',
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'box',
                            'layout' => 'baseline',
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'text',
                                'text' => '植物界',
                                'align' => 'end',
                                'size' => 'xl',
                                'weight' => 'bold',
                              ),
                              1 => 
                              array (
                                'type' => 'text',
                                'text' => 'Plantae',
                                'style' => 'italic',
                                'color' => '#aaaaaa',
                                'size' => 'lg',
                              ),
                            ),
                          ),
                          1 => 
                          array (
                            'type' => 'text',
                            'text' => '植物界和其他生物類群的主要區別是含有葉綠素，能進行光合作用，自己可以製造有機物。此外，它們絕大多數是固定生活在某一環境，不能自由運動（少部分低等藻類例外），細胞具細胞壁、細胞具全能性，即由1個植物細胞可培養成1個植物體等。在五界的系統中，植物界僅包括多細胞的光合自養的類群，而菌類、地衣和單細胞藻類以及原核的藍藻則不包括在內。',
                            'size' => 'sm',
                            'flex' => 5,
                            'wrap' => true,
                          ),
                        ),
                      ),
                      'footer' => 
                      array (
                        'type' => 'box',
                        'layout' => 'vertical',
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'button',
                            'action' => 
                            array (
                              'type' => 'uri',
                              'label' => 'learn more',
                              'uri' => 'http://www.bioguider.com/ebook/biology/chapt2/2.6.htm',
                            ),
                          ),
                        ),
                      ),
                    ),
                    4 => 
                    array (
                      'type' => 'bubble',
                      'hero' => 
                      array (
                        'type' => 'image',
                        'aspectRatio' => '20:13',
                        'aspectMode' => 'cover',
                        'url' => 'https://cdn.glitch.com/36287cff-58da-4be9-bbef-148c64c77bce%2Fthumbnails%2Fanimal.jpg?1608649097250',
                        'size' => 'full',
                      ),
                      'body' => 
                      array (
                        'type' => 'box',
                        'layout' => 'vertical',
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'box',
                            'layout' => 'baseline',
                            'contents' => 
                            array (
                              0 => 
                              array (
                                'type' => 'text',
                                'text' => '動物界',
                                'align' => 'end',
                                'size' => 'xl',
                                'weight' => 'bold',
                              ),
                              1 => 
                              array (
                                'type' => 'text',
                                'text' => 'Animalia',
                                'style' => 'italic',
                                'color' => '#aaaaaa',
                                'size' => 'lg',
                              ),
                            ),
                          ),
                          1 => 
                          array (
                            'type' => 'text',
                            'text' => '動物界絕大多數動物會消耗有機物質，呼吸氧氣，進行有氧呼吸，只有少部分物種能進行無氧呼吸。能夠移動和有性生殖，其胚胎發育過程從空心細胞球（囊胚）開始。依據攝入與消耗有機質的形式，動物可分作數個不同的生態類群：肉食動物、食草動物、雜食動物、食碎屑動物[37]以及寄生動物[38]，不同類群動物間的互動形成複雜的食物網。',
                            'size' => 'sm',
                            'flex' => 5,
                            'wrap' => true,
                          ),
                        ),
                      ),
                      'footer' => 
                      array (
                        'type' => 'box',
                        'layout' => 'vertical',
                        'contents' => 
                        array (
                          0 => 
                          array (
                            'type' => 'button',
                            'action' => 
                            array (
                              'type' => 'uri',
                              'label' => 'learn more',
                              'uri' => 'http://www.bioguider.com/ebook/biology/chapt2/2.7.htm',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                )
                ),
            1 =>
            array(
                'type' => 'text', //訊息類型 (文字)
                'text' => 'Which one do you want to know?' //回復訊息
            ),
        )
        
    ));
}else if (strtolower($message['text']) == "search" || strtolower($message['text']) == "搜尋") {
  $client->replyMessage(array(
      'replyToken' => $event['replyToken'],
      'messages' => array(
          array(
              'type' => 'text', //訊息類型 (文字)
              'text' => 'Please name an animal.' //回復訊息
          ),
      )
  ));
}else if (strtolower($message['text']) == "leopard" || strtolower($message['text']) == "豹") {
  $client->replyMessage(array(
      'replyToken' => $event['replyToken'],
      'messages' => array(
          array(
            "type" => "flex",
            "altText" => "Input your income and expense!",
            "contents" => #code
            array (
              'type' => 'carousel',
              'contents' => 
              array (
                0 => 
                array (
                  'type' => 'bubble',
                  'hero' => 
                  array (
                    'type' => 'image',
                    'url' => 'https://cdn.glitch.com/36287cff-58da-4be9-bbef-148c64c77bce%2Fthumbnails%2F%E7%BE%8E%E6%B4%B2%E8%B1%B9.png?1608797768535',
                    'size' => 'full',
                    'aspectMode' => 'cover',
                    'aspectRatio' => '15:10',
                  ),
                  'body' => 
                  array (
                    'type' => 'box',
                    'layout' => 'baseline',
                    'contents' => 
                    array (
                      0 => 
                      array (
                        'type' => 'text',
                        'text' => '美洲豹',
                        'size' => 'xl',
                        'align' => 'end',
                      ),
                      1 => 
                      array (
                        'type' => 'text',
                        'text' => 'Jaguar',
                        'size' => 'lg',
                        'align' => 'start',
                        'style' => 'italic',
                        'color' => '#aaaaaa',
                      ),
                    ),
                  ),
                  'footer' => 
                  array (
                    'type' => 'box',
                    'layout' => 'vertical',
                    'contents' => 
                    array (
                      0 => 
                      array (
                        'type' => 'button',
                        'action' => 
                        array (
                          'type' => 'message',
                          'label' => 'introduction',
                          'text' => 'jaguar introduction',
                        ),
                        'height' => 'sm',
                      ),
                      1 => 
                      array (
                        'type' => 'button',
                        'action' => 
                        array (
                          'type' => 'message',
                          'label' => 'video',
                          'text' => 'jaguar video',
                        ),
                        'height' => 'sm',
                      ),
                    ),
                  ),
                ),
                1 => 
                array (
                  'type' => 'bubble',
                  'hero' => 
                  array (
                    'type' => 'image',
                    'url' => 'https://cdn.glitch.com/36287cff-58da-4be9-bbef-148c64c77bce%2Fthumbnails%2F%E8%8A%B1%E8%B1%B9.png?1608797768535',
                    'size' => 'full',
                    'aspectMode' => 'cover',
                    'aspectRatio' => '15:10',
                  ),
                  'body' => 
                  array (
                    'type' => 'box',
                    'layout' => 'baseline',
                    'contents' => 
                    array (
                      0 => 
                      array (
                        'type' => 'text',
                        'text' => '花豹',
                        'size' => 'xl',
                        'align' => 'end',
                      ),
                      1 => 
                      array (
                        'type' => 'text',
                        'text' => 'Leopard',
                        'size' => 'lg',
                        'align' => 'start',
                        'style' => 'italic',
                        'color' => '#aaaaaa',
                      ),
                    ),
                  ),
                  'footer' => 
                  array (
                    'type' => 'box',
                    'layout' => 'vertical',
                    'contents' => 
                    array (
                      0 => 
                      array (
                        'type' => 'button',
                        'action' => 
                        array (
                          'type' => 'message',
                          'label' => 'introduction',
                          'text' => 'leopard introduction',
                        ),
                        'height' => 'sm',
                      ),
                      1 => 
                      array (
                        'type' => 'button',
                        'action' => 
                        array (
                          'type' => 'message',
                          'label' => 'video',
                          'text' => 'leopard video',
                        ),
                        'height' => 'sm',
                      ),
                    ),
                  ),
                ),
                2 => 
                array (
                  'type' => 'bubble',
                  'hero' => 
                  array (
                    'type' => 'image',
                    'url' => 'https://cdn.glitch.com/36287cff-58da-4be9-bbef-148c64c77bce%2F%E9%9B%B2%E8%B1%B9.jfif?1608797754928',
                    'size' => 'full',
                    'aspectMode' => 'cover',
                    'aspectRatio' => '15:10',
                  ),
                  'body' => 
                  array (
                    'type' => 'box',
                    'layout' => 'baseline',
                    'contents' => 
                    array (
                      0 => 
                      array (
                        'type' => 'text',
                        'text' => '雲豹',
                        'size' => 'xl',
                        'align' => 'end',
                      ),
                      1 => 
                      array (
                        'type' => 'text',
                        'text' => 'Clouded Leopard',
                        'size' => 'lg',
                        'align' => 'start',
                        'style' => 'italic',
                        'color' => '#aaaaaa',
                      ),
                    ),
                  ),
                  'footer' => 
                  array (
                    'type' => 'box',
                    'layout' => 'vertical',
                    'contents' => 
                    array (
                      0 => 
                      array (
                        'type' => 'button',
                        'action' => 
                        array (
                          'type' => 'message',
                          'label' => 'introduction',
                          'text' => 'clouded leopard introduction',
                        ),
                        'height' => 'sm',
                      ),
                      1 => 
                      array (
                        'type' => 'button',
                        'action' => 
                        array (
                          'type' => 'message',
                          'label' => 'video',
                          'text' => 'clouded leopard video',
                        ),
                        'height' => 'sm',
                      ),
                    ),
                  ),
                ),
                3 => 
                array (
                  'type' => 'bubble',
                  'hero' => 
                  array (
                    'type' => 'image',
                    'url' => 'https://cdn.glitch.com/36287cff-58da-4be9-bbef-148c64c77bce%2Fthumbnails%2F%E7%8D%B5%E8%B1%B9.png?1608797758786',
                    'size' => 'full',
                    'aspectMode' => 'cover',
                    'aspectRatio' => '15:10',
                  ),
                  'body' => 
                  array (
                    'type' => 'box',
                    'layout' => 'baseline',
                    'contents' => 
                    array (
                      0 => 
                      array (
                        'type' => 'text',
                        'text' => '獵豹',
                        'size' => 'xl',
                        'align' => 'end',
                      ),
                      1 => 
                      array (
                        'type' => 'text',
                        'text' => 'Cheetah',
                        'size' => 'lg',
                        'align' => 'start',
                        'style' => 'italic',
                        'color' => '#aaaaaa',
                      ),
                    ),
                  ),
                  'footer' => 
                  array (
                    'type' => 'box',
                    'layout' => 'vertical',
                    'contents' => 
                    array (
                      0 => 
                      array (
                        'type' => 'button',
                        'action' => 
                        array (
                          'type' => 'message',
                          'label' => 'introduction',
                          'text' => 'cheetah introduction',
                        ),
                        'height' => 'sm',
                      ),
                      1 => 
                      array (
                        'type' => 'button',
                        'action' => 
                        array (
                          'type' => 'message',
                          'label' => 'video',
                          'text' => 'cheetah video',
                        ),
                        'height' => 'sm',
                      ),
                    ),
                  ),
                ),
              ),
            )
          ),
      )
  ));
}else if (strtolower($message['text']) == "jaguar introduction" || strtolower($message['text']) == "美洲豹介紹") {
  $client->replyMessage(array(
      'replyToken' => $event['replyToken'],
      'messages' => array(
          array(
              'type' => 'text', //訊息類型 (文字)
              'text' => '分布區：北美洲和南美洲的溫暖地帶
大小：68.0-136.1公斤
食物：貒豬、貘、鹿；也吃短吻鱷、龜、蛇、豪豬、水 豚、魚、大型鳥類
美洲豹十分擅長游泳， 需要用水來保持涼爽。與豹相似的是，牠們也會出現一 種叫做「黑化」的體色基因 突變。這種突變基因是顯性 的，即這種突變一旦出現就會表現出來，所以全黑的美洲豹或全黑的豹子都比較常見。.' //回復訊息
          ),
      )
  ));
}else if (strtolower($message['text']) == "leopard introduction" || strtolower($message['text']) == "花豹介紹") {
  $client->replyMessage(array(
      'replyToken' => $event['replyToken'],
      'messages' => array(
          array(
              'type' => 'text', //訊息類型 (文字)
              'text' => '分布區：非洲、歐洲、亞洲
大小：16-66公斤
食物：小型羚羊、瞪羚、鹿、豬、靈長類、家畜；也 吃鳥類、爬蟲類、嚙齒動物、節肢動物和腐肉亞洲豹和非洲豹除了皮毛有些不同，其他特徵都十分相似。亞洲雨林裡的豹更多的是黑化種——這是一個由隱 性基因突變造成的毛色改 變，讓豹能夠在森林中更好 的隱藏自己。在光照條件好的情況下，黑豹身上的斑點依然可見。' //回復訊息
          ),
      )
  ));
}else if (strtolower($message['text']) == "clouded leopard introduction" || strtolower($message['text']) == "雲豹介紹") {
  $client->replyMessage(array(
      'replyToken' => $event['replyToken'],
      'messages' => array(
          array(
              'type' => 'text', //訊息類型 (文字)
              'text' => '分布區：尼泊爾境內的喜馬拉雅山南麓、不丹、緬甸、 印度、中國南部、臺灣（臺灣雲豹已滅絕）
大小：11-23公斤
食物：鳥類、魚、猴子、 鹿、嚙齒動物
雲豹十分神祕。牠們大部分時間都待在樹上，在那裡牠們可以捕獵猴子和鳥類。牠 們還是貓科動物中雌雄兩性體型最為不同的物種——雄雲豹是雌雲豹的兩倍大。' //回復訊息
          ),
      )
  ));
}else if (strtolower($message['text']) == "cheetah introduction" || strtolower($message['text']) == "獵豹介紹") {
  $client->replyMessage(array(
      'replyToken' => $event['replyToken'],
      'messages' => array(
          array(
              'type' => 'text', //訊息類型 (文字)
              'text' => '分布區：漠南非洲和伊朗北部
大小：15.4-72.6公斤
食物：野兔、胡狼、小型羚 羊、瞪羚
獵豹是世界上跑得最快的動 物，這種迅捷源於多個因素。其中一個因素是與其他貓科動物相比，獵豹的鼻孔 更寬，鼻腔更大。這兩個特點都能使牠們在奔跑時，每次吸進的氧氣更多。' //回復訊息
          ),
      )
  ));
}else if (strtolower($message['text']) == "jaguar video" || strtolower($message['text']) == "美洲豹影片") {
  $client->replyMessage(array(
      'replyToken' => $event['replyToken'],
      'messages' => array(
          array(
              'type' => 'video', //訊息類型 (文字)
              'originalContentUrl' => 'https://www.youtube.com/watch?v=bHy7cxxuy08', //回復影片
              'previewImageUrl' => 'https://cdn.glitch.com/36287cff-58da-4be9-bbef-148c64c77bce%2Fthumbnails%2F%E7%BE%8E%E6%B4%B2%E8%B1%B9%E5%BD%B1.png?1608854888575' //回復的預覽圖片
          ),
      )
  ));
}else if (strtolower($message['text']) == "leopard video" || strtolower($message['text']) == "花豹影片") {
  $client->replyMessage(array(
      'replyToken' => $event['replyToken'],
      'messages' => array(
          array(
              'type' => 'video', //訊息類型 (文字)
              'originalContentUrl' => 'https://www.youtube.com/watch?v=ItcmYlFn41E', //回復影片
              'previewImageUrl' => 'https://cdn.glitch.com/36287cff-58da-4be9-bbef-148c64c77bce%2Fthumbnails%2F%E8%8A%B1%E8%B1%B9%E5%BD%B1.png?1608854882117' //回復的預覽圖片
          ),
      )
  ));
}else if (strtolower($message['text']) == "clouded leopard video" || strtolower($message['text']) == "雲豹影片") {
  $client->replyMessage(array(
      'replyToken' => $event['replyToken'],
      'messages' => array(
          array(
              'type' => 'video', //訊息類型 (文字)
              'originalContentUrl' => 'https://www.youtube.com/watch?v=7htiNhweFZQ', //回復影片
              'previewImageUrl' => 'https://cdn.glitch.com/36287cff-58da-4be9-bbef-148c64c77bce%2Fthumbnails%2F%E9%9B%B2%E8%B1%B9%E5%BD%B1.png?1608854869727' //回復的預覽圖片
          ),
      )
  ));
}else if (strtolower($message['text']) == "cheetah video" || strtolower($message['text']) == "獵豹影片") {
  $client->replyMessage(array(
      'replyToken' => $event['replyToken'],
      'messages' => array(
          array(
              'type' => 'video', //訊息類型 (文字)
              'originalContentUrl' => 'https://www.youtube.com/watch?v=Qx8NsouFk84', //回復影片
              'previewImageUrl' => 'https://cdn.glitch.com/36287cff-58da-4be9-bbef-148c64c77bce%2Fthumbnails%2F%E7%8D%B5%E8%B1%B9%E5%BD%B1.png?1608854880949' //回復的預覽圖片
          ),
      )
  ));
}else if (strtolower($message['text']) == "penguin" || strtolower($message['text']) == "企鵝") {
  $client->replyMessage(array(
      'replyToken' => $event['replyToken'],
      'messages' => array(
          array(
            "type" => "flex",
            "altText" => "Input your income and expense!",
            "contents" => #code
            array (
              'type' => 'carousel',
              'contents' => 
              array (
                0 => 
                array (
                  'type' => 'bubble',
                  'hero' => 
                  array (
                    'type' => 'image',
                    'url' => 'https://cdn.glitch.com/36287cff-58da-4be9-bbef-148c64c77bce%2Fthumbnails%2F%E7%9A%87%E5%B8%9D%E4%BC%81%E9%B5%9D.jpg?1608859380899',
                    'size' => 'full',
                    'aspectMode' => 'cover',
                    'aspectRatio' => '15:10',
                  ),
                  'body' => 
                  array (
                    'type' => 'box',
                    'layout' => 'baseline',
                    'contents' => 
                    array (
                      0 => 
                      array (
                        'type' => 'text',
                        'text' => '皇帝企鵝',
                        'size' => 'xl',
                        'align' => 'end',
                      ),
                      1 => 
                      array (
                        'type' => 'text',
                        'text' => 'Emperor Penguin',
                        'size' => 'lg',
                        'align' => 'start',
                        'style' => 'italic',
                        'color' => '#aaaaaa',
                      ),
                    ),
                  ),
                  'footer' => 
                  array (
                    'type' => 'box',
                    'layout' => 'vertical',
                    'contents' => 
                    array (
                      0 => 
                      array (
                        'type' => 'button',
                        'action' => 
                        array (
                          'type' => 'message',
                          'label' => 'introduction',
                          'text' => 'emperor introduction',
                        ),
                        'height' => 'sm',
                      ),
                      1 => 
                      array (
                        'type' => 'button',
                        'action' => 
                        array (
                          'type' => 'message',
                          'label' => 'video',
                          'text' => 'emperor video',
                        ),
                        'height' => 'sm',
                      ),
                    ),
                  ),
                ),
                1 => 
                array (
                  'type' => 'bubble',
                  'hero' => 
                  array (
                    'type' => 'image',
                    'url' => 'https://cdn.glitch.com/36287cff-58da-4be9-bbef-148c64c77bce%2F%E5%9C%8B%E7%8E%8B%E4%BC%81%E9%B5%9D.jfif?1608859374794',
                    'size' => 'full',
                    'aspectMode' => 'cover',
                    'aspectRatio' => '15:10',
                  ),
                  'body' => 
                  array (
                    'type' => 'box',
                    'layout' => 'baseline',
                    'contents' => 
                    array (
                      0 => 
                      array (
                        'type' => 'text',
                        'text' => '國王企鵝',
                        'size' => 'xl',
                        'align' => 'end',
                      ),
                      1 => 
                      array (
                        'type' => 'text',
                        'text' => 'King Penguin',
                        'size' => 'lg',
                        'align' => 'start',
                        'style' => 'italic',
                        'color' => '#aaaaaa',
                      ),
                    ),
                  ),
                  'footer' => 
                  array (
                    'type' => 'box',
                    'layout' => 'vertical',
                    'contents' => 
                    array (
                      0 => 
                      array (
                        'type' => 'button',
                        'action' => 
                        array (
                          'type' => 'message',
                          'label' => 'introduction',
                          'text' => 'king introduction',
                        ),
                        'height' => 'sm',
                      ),
                      1 => 
                      array (
                        'type' => 'button',
                        'action' => 
                        array (
                          'type' => 'message',
                          'label' => 'video',
                          'text' => 'king video',
                        ),
                        'height' => 'sm',
                      ),
                    ),
                  ),
                ),
                2 => 
                array (
                  'type' => 'bubble',
                  'hero' => 
                  array (
                    'type' => 'image',
                    'url' => 'https://cdn.glitch.com/36287cff-58da-4be9-bbef-148c64c77bce%2F%E9%BA%A5%E5%93%B2%E5%80%AB%E4%BC%81%E9%B5%9D.jfif?1608859368588',
                    'size' => 'full',
                    'aspectMode' => 'cover',
                    'aspectRatio' => '15:10',
                  ),
                  'body' => 
                  array (
                    'type' => 'box',
                    'layout' => 'baseline',
                    'contents' => 
                    array (
                      0 => 
                      array (
                        'type' => 'text',
                        'text' => '麥哲倫企鵝',
                        'size' => 'xl',
                        'align' => 'end',
                      ),
                      1 => 
                      array (
                        'type' => 'text',
                        'text' => 'Magellanic Penguin',
                        'size' => 'lg',
                        'align' => 'start',
                        'style' => 'italic',
                        'color' => '#aaaaaa',
                      ),
                    ),
                  ),
                  'footer' => 
                  array (
                    'type' => 'box',
                    'layout' => 'vertical',
                    'contents' => 
                    array (
                      0 => 
                      array (
                        'type' => 'button',
                        'action' => 
                        array (
                          'type' => 'message',
                          'label' => 'introduction',
                          'text' => 'magellanic introduction',
                        ),
                        'height' => 'sm',
                      ),
                      1 => 
                      array (
                        'type' => 'button',
                        'action' => 
                        array (
                          'type' => 'message',
                          'label' => 'video',
                          'text' => 'magellanic video',
                        ),
                        'height' => 'sm',
                      ),
                    ),
                  ),
                ),
              ),
            )
          ),
      )
  ));
}else if (strtolower($message['text']) == "emperor introduction" || strtolower($message['text']) == "皇帝企鵝介紹") {
  $client->replyMessage(array(
      'replyToken' => $event['replyToken'],
      'messages' => array(
          array(
              'type' => 'text', //訊息類型 (文字)
              'text' => '分布區：南極大陸沿海
大小：身高可達120厘米，體重可達46公斤
食物：甲殼類動物為主，偶爾也捕食小魚和烏賊
皇帝企鵝可以潛入水底150至500米，最深的潛水記錄甚至可達565米。在水下，它們最長能屏住呼吸1小時。它們的游泳速度為時速6到9千米，最高速度可達到時速20千米。而公皇帝企鵝雙腿和腹部下方之間有一塊布滿血管的紫色皮膚的孵卵斑，能讓蛋在環境溫度低達零下華氏180度(攝氏零下117度)的低溫中保持在舒適的華氏97度(攝氏36度)以協助小企鵝保溫。' //回復訊息
          ),
      )
  ));
}else if (strtolower($message['text']) == "king introduction" || strtolower($message['text']) == "國王企鵝介紹") {
  $client->replyMessage(array(
      'replyToken' => $event['replyToken'],
      'messages' => array(
          array(
              'type' => 'text', //訊息類型 (文字)
              'text' => '分布區：有2個亞種，福克蘭群島王企鵝分佈於南美福克蘭群島及南喬治亞島，而麥誇里島王企鵝則分佈於南非南端的海域及澳洲南方的海域
大小：高約90厘米，重11至15公斤
食物：主要以魚維生，特別喜歡吃小型的燈籠魚科的魚類，也會吃頭足類，如魷魚
與皇帝企鵝相較，嘴相對較長，耳斑有不同的色調及形狀。幼鳥有較淺的黃色耳斑及較暗的下顎板。國王企鵝為集體繁殖，有領域性，每對領域的範圍約1平方公尺。不築巢，每窩下一個蛋，由雌雄輪流孵蛋52-56天。雛鳥孵出時幾乎全裸，第一次的絨羽淺灰或褐色，第二次則轉為暗褐色。' //回復訊息
          ),
      )
  ));
}else if (strtolower($message['text']) == "magellanic introduction" || strtolower($message['text']) == "麥哲倫企鵝介紹") {
  $client->replyMessage(array(
      'replyToken' => $event['replyToken'],
      'messages' => array(
          array(
              'type' => 'text', //訊息類型 (文字)
              'text' => '分布區：南美洲阿根廷、智利和福克蘭群島沿海，也有少量遷入巴西境內
大小：一般身高約70厘米，體重約4公斤
食物：魚、蝦和甲殼類動物
它們的頭部主要呈黑色，有一條白色的寬帶從眼後過耳朵一直延伸至下頜附近。牠們群居性動物，經常棲息在一些近海的小島，它們尤其喜愛選擇茂密的草叢或灌木叢中坐窩，以躲避鳥類天敵的捕殺。此外，在某些氣候較為乾燥，植被並不茂盛的地帶，如果地質較為鬆軟，麥哲倫企鵝也會挖洞坐窩。'
          ),
      )
  ));
}else if (strtolower($message['text']) == "emperor video" || strtolower($message['text']) == "皇帝企鵝影片") {
  $client->replyMessage(array(
      'replyToken' => $event['replyToken'],
      'messages' => array(
          array(
              'type' => 'video', //訊息類型 (文字)
              'originalContentUrl' => 'https://www.youtube.com/watch?v=8IWcbIieR2E', //回復影片
              'previewImageUrl' => 'https://cdn.glitch.com/36287cff-58da-4be9-bbef-148c64c77bce%2Fthumbnails%2F%E7%9A%87%E5%B8%9D%E4%BC%81%E9%B5%9D%E5%BD%B1.png?1608859358683' //回復的預覽圖片
          ),
      )
  ));
}else if (strtolower($message['text']) == "king video" || strtolower($message['text']) == "國王企鵝影片") {
  $client->replyMessage(array(
      'replyToken' => $event['replyToken'],
      'messages' => array(
          array(
              'type' => 'video', //訊息類型 (文字)
              'originalContentUrl' => 'https://www.youtube.com/watch?v=ItcmYlFn41E', //回復影片
              'previewImageUrl' => 'https://cdn.glitch.com/36287cff-58da-4be9-bbef-148c64c77bce%2Fthumbnails%2F%E5%9C%8B%E7%8E%8B%E5%BD%B1.png?1608859353049' //回復的預覽圖片
          ),
      )
  ));
}else if (strtolower($message['text']) == "magellanic video" || strtolower($message['text']) == "麥哲倫企鵝影片") {
  $client->replyMessage(array(
      'replyToken' => $event['replyToken'],
      'messages' => array(
          array(
              'type' => 'video', //訊息類型 (文字)
              'originalContentUrl' => 'https://www.youtube.com/watch?v=7htiNhweFZQ', //回復影片
              'previewImageUrl' => 'https://cdn.glitch.com/36287cff-58da-4be9-bbef-148c64c77bce%2Fthumbnails%2F%E9%BA%A5%E5%93%B2%E5%80%AB%E5%BD%B1.png?1608859364914' //回復的預覽圖片
          ),
      )
  ));
}else if (strtolower($message['text']) == "others" || strtolower($message['text']) == "其他") {
  $client->replyMessage(array(
      'replyToken' => $event['replyToken'],
      'messages' => array(
          0 =>
          array(
            "type" => "flex",
            "altText" => "helo",
            "contents" => 
            array (
              'type' => 'carousel',
              'contents' => 
              array (
                0 => 
                array (
                  'type' => 'bubble',
                  'hero' => 
                  array (
                    'type' => 'image',
                    'url' => 'https://cdn.glitch.com/36287cff-58da-4be9-bbef-148c64c77bce%2F%E8%8D%92%E9%87%8E.jfif?1608652685763',
                    'size' => 'full',
                    'aspectMode' => 'cover',
                    'action' => 
                    array (
                      'type' => 'uri',
                      'label' => 'action',
                      'uri' => 'https://www.sow.org.tw/',
                    ),
                  ),
                ),
                1 => 
                array (
                  'type' => 'bubble',
                  'hero' => 
                  array (
                    'type' => 'image',
                    'url' => 'https://cdn.glitch.com/36287cff-58da-4be9-bbef-148c64c77bce%2F%E7%89%B9%E7%94%9F.jpg?1608653146428',
                    'size' => 'full',
                    'aspectMode' => 'cover',
                    'action' => 
                    array (
                      'type' => 'uri',
                      'label' => 'action',
                      'uri' => 'https://www.tesri.gov.tw/',
                    ),
                  ),
                ),
                2 => 
                array (
                  'type' => 'bubble',
                  'hero' => 
                  array (
                    'type' => 'image',
                    'url' => 'https://cdn.glitch.com/36287cff-58da-4be9-bbef-148c64c77bce%2Fthumbnails%2FTUAPA.jpg?1608653269632',
                    'size' => 'full',
                    'aspectMode' => 'cover',
                    'action' => 
                    array (
                      'type' => 'uri',
                      'label' => 'action',
                      'uri' => 'http://www.tuapa.org.tw/',
                    ),
                  ),
                ),
                3 => 
                array (
                  'type' => 'bubble',
                  'hero' => 
                  array (
                    'type' => 'image',
                    'url' => 'https://cdn.glitch.com/36287cff-58da-4be9-bbef-148c64c77bce%2Fthumbnails%2FHMCA.jpg?1608653515647',
                    'size' => 'full',
                    'aspectMode' => 'cover',
                    'action' => 
                    array (
                      'type' => 'uri',
                      'label' => 'action',
                      'uri' => 'https://group.ieco.tw/Soc/AboutMe/1053',
                    ),
                  ),
                ),
                4 => 
                array (
                  'type' => 'bubble',
                  'hero' => 
                  array (
                    'type' => 'image',
                    'url' => 'https://cdn.glitch.com/36287cff-58da-4be9-bbef-148c64c77bce%2F%E6%A4%8D%E7%89%A9%E4%BF%9D%E8%AD%B7.jfif?1608653724432',
                    'size' => 'full',
                    'aspectMode' => 'cover',
                    'action' => 
                    array (
                      'type' => 'uri',
                      'label' => 'action',
                      'uri' => 'http://www.pps.org.tw/Web/Home19.aspx?OrgID=%2fVZH2Nj3E90%3d',
                    ),
                  ),
                ),
                5 => 
                array (
                  'type' => 'bubble',
                  'hero' => 
                  array (
                    'type' => 'image',
                    'url' => 'https://cdn.glitch.com/36287cff-58da-4be9-bbef-148c64c77bce%2F%E5%8E%9F%E7%94%9F%E6%A4%8D%E7%89%A9.png?1608654033840',
                    'size' => 'full',
                    'aspectMode' => 'cover',
                    'action' => 
                    array (
                      'type' => 'uri',
                      'label' => 'action',
                      'uri' => 'http://www.taiwanplant.org.tw/',
                    ),
                  ),
                ),
              ),
            )
          ),
          1 =>
          array(
              'type' => 'text', //訊息類型 (文字)
              'text' => 'There are lots of organizations dedicated in creature protection！' //回復訊息
          ),
      )
  ));
}


// else if (strtolower($message['text']) == "查看" || strtolower($message['text']) == "list")  {
//     $client->replyMessage(array(
//         'replyToken' => $event['replyToken'],
//         'messages' => array(
//             array(
//                 // "type" => "flex",
//                 // "altText" => "Input your income and expense!",
//                 // "contents" => #code
//                 'type' => 'video', //訊息類型 (影片)
//                 'originalContentUrl' => 'https://api.reh.tw/line/bot/example/assets/videos/example.mp4', //回復影片
//                 'previewImageUrl' => 'https://api.reh.tw/line/bot/example/assets/images/example.jpg' //回復的預覽圖片
                
//             )
            
//         )
//     ));
   
// }
