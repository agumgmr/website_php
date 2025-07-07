<?php include '../../inc/header.php'; ?>

<h1>How to Create a C Program in Linux</h1>

<p>This tutorial will guide you through writing, compiling, and running a simple C program on a Linux system using the GCC compiler.</p>

<h2>1. Install the GCC Compiler</h2>
<p>Open your terminal and run the following command:</p>
<pre><code>sudo apt update
sudo apt install build-essential</code></pre>

<h2>2. Write Your C Code</h2>
<p>Create a file named <code>hello.c</code> and insert the following code:</p>
<pre><code>#include &lt;stdio.h&gt;

int main() {
    printf("Hello, world!\n");
    return 0;
}</code></pre>

<h2>3. Compile the Code</h2>
<p>Use <code>gcc</code> to compile the file:</p>
<pre><code>gcc hello.c -o hello</code></pre>

<h2>4. Run the Program</h2>
<p>Execute the output binary:</p>
<pre><code>./hello</code></pre>

<p><strong>Output:</strong></p>
<pre><code>Hello, world!</code></pre>

<h2>Extra Tips</h2>
<ul>
    <li>Show warnings: <code>gcc -Wall hello.c -o hello</code></li>
    <li>Add debug info: <code>gcc -g hello.c -o hello</code></li>
    <li>Compile multiple files: <code>gcc file1.c file2.c -o app</code></li>
</ul>

<h2>Conclusion</h2>
<p>You've successfully created, compiled, and run your first C program on Linux. This is an essential skill for system programming, embedded development, and understanding how software works at a lower level.</p>

<?php include '../../inc/footer.php'; ?>
