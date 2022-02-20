# Laravel 9 提供用於計算數值資料的數學統計函數

引入 hi-folks 的 statistics 套件來擴增提供用於計算數值資料的數學統計函數，例如算術平均、中位數、範圍、四分位數、第 1 四分位數（或第 25 百分位數）、第 3 四分位數（或第 75 百分位數）、次數（累積、相對）等。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產⽣ Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/statistics/calculate/` 來進行數值資料計算。

----

## 畫面截圖
![](https://i.imgur.com/c5VR5Bx.png)
> 了解資料中央趨勢的各種衡量指標如算術平均數、中位數等的衡量方法