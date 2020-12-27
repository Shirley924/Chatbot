# 動物方程式
## 功能介紹
### 輸入"start/開始"指令
Linebot會跳出功能介紹

<img src="https://i.imgur.com/AwesfTH.jpg" width="500">

### 按下[intro.]按鈕
呈現生物五域的連鎖圖表

<img src="https://i.imgur.com/KoVYlqg.jpg" width="500">


### 按下[search]按鈕
會詢問要問甚麼動物

<img src="https://i.imgur.com/jFbXsZN.jpg" width="500">

接著輸入想查詢的動物名稱，例如：
* 豹

<img src="https://i.imgur.com/pxiTvrN.jpg" width="500">

<img src="https://i.imgur.com/jmzQcjX.jpg" width="500">

接著會跳出豹的品種供選擇，
現在按下[introduction]按鍵，將會出現：

<img src="https://i.imgur.com/h3YE6cA.jpg" width="500">

按下[video]按鍵，將會跳出相關影片：

<img src="https://i.imgur.com/AhsRvLi.jpg" width="500">
> 在搜尋方面我沒有做爬蟲功能，因此資料是寫死的。除了「豹」之外，還可以查詢「企鵝」


### 按下[others]按鈕
呈現各處組織的logo&連結

<img src="https://i.imgur.com/ijQmfBH.jpg" width="500">

---


## FSM

<img src="https://i.imgur.com/6cjryCn.png">
```graphviz
digraph Linebot{
    //rankdir=LR;
    init [label="init", style=filled, fillcolor=yellow]
    state1 [label="function intro."]
    funct1 [label="five kingdoms intro."]
    funct2 [label="search animals"]
    anim1 [label="leopard"]
    anim2 [label="pinguin"]
    funct3 [label="link of organizations"]
    web [label="website"]
    org [label="website of org."]
    video [label="video of animal"]
    intro [label="introduction of animal"]
    
    init->state1 [label="start/開始"]
    state1->init [label="lumbda"]
    init->funct1 [label="introduction/介紹"]
    state1->funct1 [label="{press the button[intro.]}"]
    funct1->init [label="lumbda"]
    funct1->web [label="  {press the button[learn more]}"]
    init->funct2 [label="search/搜尋"]
    state1->funct2 [label="{press the button[search]}"]
    funct2->init [label="lumbda"]
    init->funct3 [label="others/其他"]
    state1->funct3 [label="{press the button[others]}"]
    funct3->init [label="lumbda"]
    funct3->org [label="[press the images]"]
    funct2->anim1 [label="leopard/豹"]
    anim1->intro [label="{press the button[intro.]}"]
    anim1->video [label="{press the button[video]}"]
    anim1->funct2 [label="lumbda"]
    funct2->anim2 [label="pinguin/企鵝"]
    anim2->intro [label="{press the button[intro.]}"]
    anim2->video [label="{press the button[video]}"]
    anim2->funct2 [label="lumbda"]
}
```
