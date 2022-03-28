# TDD-測試先行開發方式 #

## 你將會得到 ##
-  簡單的單元測試 unit test
-  了解單元測試中的(斷點 期望值 實際值 預設狀態)等概念
-  用PHP and JS實作一個範例

<br>

## 開始之前說點"我"用過的感想 ##
- TDD只是一種開發方式，不是必殺技，但我覺得比其他開發模式更能執行<br>DDD 有點玄學，<br>敏捷有點理想化，<br>傳統的看PM文件開始寫production code的方式，很快就改不動需求
> 相比之下TDD，對工程師來說是馬上可用的
- 用unit test來協助開發，不表示可完全消除BUG，但能聚焦思考盲區，容易DEBUG
- TDD能讓你，敢於重構，優化代碼，進而可以寫更大的專案
> 重購的定義 <font color=#FFFF00>在不改變軟體外部行為的前提下，改變其內部結構，使其更容易理解且易於修改</font>
- TDD事實上能讓你更快交付(足夠可用)
- TDD本身也是一種文件，我用起來覺會比文件檔和註解更有意義
- TDD比較是一種思考方法(反直覺)，執行手法各種程式語言都差不多

<br>

## 先來欣賞幾張單元測試AND集成測試的梗圖 ##
![單元測試 集成測試](https://pbs.twimg.com/media/EI7j7OIWkAA-hsY.png)

https://twitter.com/i/status/687672086152753152

https://twitter.com/withzombies/status/829716565834752000

https://m.facebook.com/this.Programmer/videos/unit-test-vs-integration-test/822662497936540/

https://gfycat.com/fearlesssilverkittiwake

https://www.reddit.com/r/ProgrammerHumor/comments/htf08v/when_your_unit_test_passes_but_integration_test/

查 2 unit tests 0 integration tests  有很多

<br>

## 可以用在 ##
- 可以在一個專案的小元件上用，逐漸擴大成習慣
- 在大專案用，應該效果更明顯 😁😁😁😁😁😁
<br>

## 準備軟體 ##
- PHP phpunit [link](https://phpunit.readthedocs.io/zh_CN/latest/index.html) 
- js  Jest [link](https://jestjs.io/)  mocha [link](https://mochajs.org/)
- python  unittest [link](https://docs.python.org/zh-tw/3/library/unittest.html#module-unittest)
- JAVA  JUnit

> 找一遍 各家單元測試框架的相關關鍵詞 <br>斷點assert  <br>期望值expected<br>  實際值actual<br> 預設狀態fixture(放資料 ，GLOBAL，放預設值....之類的地方) 

<br>

## 具體操作(PHP and JS 為範例) ##
PHP 需求:寫一個留言板，可以顯示所有留言，可以增加留言，留言可以案讚<br>
JS 需求:寫一個投票功能，可以顯示投票列表，投票+1

- 先用一般直接寫production code的方式開發

- 再用TDD先寫測試在寫production code的方式開發<br>
 ![單元測試](https://ithelp.ithome.com.tw/upload/images/20171219/20107209TCtY1OhGTn.png)

<br>

 ## 說明一下六都專案和六都問券中具體案例 ##




