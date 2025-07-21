<h1>🧳 Friends Tour Money Planner – SIT Coorg Trip Form</h1>

<p>
  This is a simple PHP-based web application for collecting student trip registration details for a college tour to Coorg. The form captures student information like name, USN, branch, email, phone number, and additional details, then stores it in a MySQL database.
</p>

<h2>🌐 Live Preview</h2>
<img src="PHP_BG.jpg" alt="Form Screenshot" class="screenshot">

<h2>🚀 Features</h2>
<ul>
  <li>📄 HTML5 + CSS3 based front-end form</li>
  <li>🧠 Google Fonts integrated for aesthetic typography</li>
  <li>📦 Backend with PHP and MySQL</li>
  <li>🗃️ Data is stored securely in a MySQL database</li>
  <li>✅ Success message upon form submission</li>
</ul>

<h2>🧰 Tech Stack</h2>
<ul>
  <li><strong>Frontend:</strong> HTML, CSS, Google Fonts</li>
  <li><strong>Backend:</strong> PHP</li>
  <li><strong>Database:</strong> MySQL</li>
</ul>

<h2>📁 Project Structure</h2>
<pre><code>PHP_project_new/
├── index.php         # Main PHP logic and form processing
├── index.html        # Optional HTML version (if used separately)
├── style.css         # Custom styles
├── PHP_BG.jpg        # Background image for the form
└── .vscode/          # VSCode project settings
</code></pre>

<h2>⚙️ How to Run Locally</h2>
<ol>
  <li>Clone the repository:
    <pre><code>git clone https://github.com/vinay912005/Friends_Tour_Money_planner.git</code></pre>
  </li>
  <li>Move the project to your XAMPP <code>htdocs</code> folder:
    <pre><code>C:/xampp/htdocs/</code></pre>
  </li>
  <li>Start Apache and MySQL via XAMPP control panel.</li>
  <li>Create a database named <code>trip</code> in <strong>phpMyAdmin</strong>:
    <pre><code>CREATE DATABASE trip;</code></pre>
  </li>
  <li>Create a table inside the <code>trip</code> database:
    <pre><code>CREATE TABLE trip (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  usn VARCHAR(50),
  branch VARCHAR(100),
  email VARCHAR(100),
  `phone number` VARCHAR(20),
  other TEXT,
  dt DATETIME
);</code></pre>
  </li>
  <li>Open your browser and navigate to:
    <pre><code>http://localhost/PHP_project_new/index.php</code></pre>
  </li>
</ol>

<h2>🙋‍♂️ Author</h2>
<ul>
  <li><strong>Vinay J</strong></li>
  <li>GitHub: <a href="https://github.com/vinay912005" target="_blank">@vinay912005</a></li>
</ul>

<h2>📜 License</h2>
<p>
  This project is open-source and free to use under the <strong>MIT License</strong>.
</p>
