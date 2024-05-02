<p align="center" >
  <b>POINT UTAMA</b>
</p>

---

> #### INSTALASI
> - PHP 8.1.0
> - LARAVEL 9.1.10
>   ```
>   Composer Create-project laravel\laravel=v9.1.10 laravel-blade
>   ```
> #### APA ITU BLADE?
> - Laravel Blade memungkinkan pengembang untuk menghasilkan desain dan tema elegant berbasis HTML.
>
> #### COMMENT
> - Di laravel blade kode comment berbeda dengan HTML pada umumnya, di laravel blade comment menggunakan syntax ``` {{-- --}} ``` untuk menandai komentar dalam kode Blade.
>
> Berikut contoh kode comment di laravel blade :
>
> ```
> <html>
> <head>
> <title>Comment</title>
> </head>
> <body>
> {{-- Contoh Comment --}}
> <h1>Berikut contoh kode laravel blade</h1>
> </body>
> </html>
> ```
> 
> #### HTML ENCODING
> - HTML Encoding adalah proses mengubah karakter-karakter khusus dalam kode HTML menjadi entitas HTML yang sesuai, seperti < untuk < dan & untuk &. Ini diperlukan agar karakter-karakter tersebut ditampilkan dengan benar oleh browser dan tidak diinterpretasikan sebagai kode HTML.
>
> Berikut contoh html encoding :
> ```
>  <html>
> <head>
> <title>HTML Encoding</title>
> </head>
> <body>
> {!! $name !!}
> </body>
> </html>
> ```
>
> #### DiSABLED BLADE
> - Disabled Blade adalah fitur di Laravel yang memungkinkan Anda untuk menonaktifkan pemrosesan Blade pada bagian tertentu dari file Blade. Ini dilakukan dengan menggunakan direktif @verbatim, yang memungkinkan Anda menulis kode sebagai teks biasa tanpa diinterpretasikan oleh Blade.
>
> Berikut contoh kode log channel,slack :
> ```
> <html>
> <body>
> 
> @verbatim
> <div class="col-md-12">
>     <p>{{ title }}</p>
>     <p>{{ description }}</p>
> </div>
> @endverbatim
> 
> </body>
> </html>
> ```
>
> #### If Statement
> - Pernyataan if digunakan untuk menjalankan blok kode berdasarkan kondisi yang diberikan. Dalam Laravel Blade, Anda dapat menggunakan @if, @else, dan @elseif
>
> Berikut contoh kode if statement :
> ```
> <html>
> <body>
>   <p>
>     @if(count($money) == 1)
>         I have one dollar
>     @elseif(count($hobbies) > 1)
>         I have more than one dollar
>     @else
>         I don't have any money
>     @endif
>   </p>
>  </body>
> </html>
> ```
> #### UNLESS STATEMENT
> - Pernyataan unless dalam Laravel Blade adalah cara untuk mengevaluasi kebalikan kondisi. Artinya, blok kode di dalamnya akan dieksekusi jika kondisi yang diberikan bernilai salah (false).
>
> Berikut kode context :
>
> ```
> <html>
>
> <body>
>
> @unless($isAdmin)
>    Anda bukan seorang administrator .
> @endunless
>
> </body>
>
> </html>
> ```
---
> #### ISSET
> - isset digunakan untuk memeriksa apakah suatu variabel telah diatur dan tidak bernilai null, 
>
> Berikut kode handler :
> ```
> <html>
>  <body>
> 
>   <p>
>    @isset($name)
>        Hello, {{$name}}
>    @endisset
>  </p>
>
>  </body>
> </html>
> ```
---
> #### SWITCH STATEMENT
> - Switch statement adalah cara untuk menjalankan kode yang berbeda tergantung pada nilai dari suatu ekspresi atau variabel. Ini memungkinkan kita untuk menentukan serangkaian kondisi yang berbeda dan melakukan tindakan berdasarkan kondisi tersebut.
> Berikut kode formatter :
> ```
> <html>
>
> <body>
>
> @switch($value)
>    @case('A')
>        Bagus
>        @break
>    @case('B')
>        Baik
>        @break
>    @case('C')
>        Cukup
>        @break
>    @default
>       Tidak Lulus
> @endswitch
>
> </body>
>
> </html>
> ```
> 
<p align="center" >
  <b>PERTANYAAN DAN CATATAN TAMBAHAN</b>
</p>

---

> - 

---

<p align="center" >
  <b>KESIMPULAN</b>
</p>

> - Logging penting dalam pengembangan aplikasi untuk mencatat informasi kejadian.


















