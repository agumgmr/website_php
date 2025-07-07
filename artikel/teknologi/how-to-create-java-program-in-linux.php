<?php include '../../inc/header.php'; ?>

<h1>How to Create and Run a Java Program in Linux</h1>

<p>This guide explains how to write, compile, and execute a basic Java program on a Linux system using the terminal and the Java Development Kit (JDK).</p>

<h2>1. Install the Java Development Kit (JDK)</h2>
<p>Open the terminal and run the following commands to install JDK:</p>
<pre><code>sudo apt update
sudo apt install default-jdk</code></pre>

<p>Verify that Java is installed:</p>
<pre><code>java -version
javac -version</code></pre>

<h2>2. Write a Java Program</h2>
<p>Create a file called <code>Hello.java</code>:</p>
<pre><code>public class Hello {
    public static void main(String[] args) {
        System.out.println("Hello, world!");
    }
}</code></pre>

<h2>3. Compile the Program</h2>
<p>Use the <code>javac</code> compiler:</p>
<pre><code>javac Hello.java</code></pre>
<p>This generates a file named <code>Hello.class</code>.</p>

<h2>4. Run the Program</h2>
<pre><code>java Hello</code></pre>

<p>The output will be:</p>
<pre><code>Hello, world!</code></pre>

<h2>Extra Tips</h2>
<ul>
    <li>The file name must match the public class name exactly (case-sensitive).</li>
    <li>You can compile and run in one line:</li>
</ul>
<pre><code>javac Hello.java && java Hello</code></pre>

<h2>Conclusion</h2>
<p>Now you know how to create and run a simple Java program in Linux. This is a foundational step toward developing desktop, web, or even Android applications using Java!</p>

<?php include '../../inc/footer.php'; ?>
