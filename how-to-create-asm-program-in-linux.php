<?php include '../../inc/header.php'; ?>

<h1>Cara Membuat Program Assembly (ASM) di Linux</h1>

<p>Artikel ini membahas bagaimana membuat program sederhana menggunakan bahasa assembly di Linux untuk arsitektur <strong>x86_64</strong>.</p>

<h2>1. Instalasi Tools</h2>
<p>Pastikan kamu memiliki <code>nasm</code> dan <code>ld</code>:</p>
<pre><code>sudo apt update
sudo apt install nasm</code></pre>

<h2>2. Menulis Kode Assembly</h2>
<p>Buat file bernama <code>hello.asm</code> dengan isi:</p>
<pre><code>section .data
    msg db "Hello, world!", 0xA
    len equ $ - msg

section .text
    global _start

_start:
    mov rax, 1
    mov rdi, 1
    mov rsi, msg
    mov rdx, len
    syscall

    mov rax, 60
    xor rdi, rdi
    syscall</code></pre>

<h2>3. Compile dan Link</h2>
<p>Jalankan perintah berikut:</p>
<pre><code>nasm -f elf64 hello.asm -o hello.o
ld hello.o -o hello</code></pre>

<h2>4. Menjalankan Program</h2>
<pre><code>./hello</code></pre>
<p>Hasil yang muncul:</p>
<pre><code>Hello, world!</code></pre>

<h2>Penjelasan</h2>
<ul>
    <li><code>mov rax, 1</code>: syscall write</li>
    <li><code>mov rdi, 1</code>: stdout</li>
    <li><code>mov rsi, msg</code>: alamat pesan</li>
    <li><code>mov rdx, len</code>: panjang pesan</li>
    <li><code>mov rax, 60</code>: syscall exit</li>
    <li><code>xor rdi, rdi</code>: status exit 0</li>
</ul>

<h2>Kesimpulan</h2>
<p>Kamu telah berhasil membuat dan menjalankan program assembly sederhana di Linux. Ini adalah pondasi awal untuk mengenal dunia pemrograman tingkat rendah dan sistem operasi.</p>

<?php include '../../inc/footer.php'; ?>
