<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta charset='UTF-8'/><meta content='width=device-width, initial-scale=1, user-scalable=1, minimum-scale=1, maximum-scale=5' name='viewport'/><meta content='IE=edge' http-equiv='X-UA-Compatible'/>
    <meta name="description" content="GPT-4 Free Access">
    <link rel="icon" href="https://i.postimg.cc/0QY6ctyj/CHARDS-BOT.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Chat AI Messaging || GPT-4 Access</title>
    <style>
        body {
            background-color: #f1f1f1;
            font-family: 'Inconsolata', monospace;
            margin: 0;
            padding: 20px;
        }

        #chatbox {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
            overflow-x: auto;
        }

        #title {
            text-align: center;
            margin-bottom: 20px;
        }

        #result {
            background-color: #f9f9f9;
            border-radius: 5px;
            padding: 10px;
            margin-top: 10px;
            font-family: monospace;
            white-space: pre-wrap;
            overflow-x: auto;
        }

        #footer {
            text-align: center;
            margin-top: 20px;
        }

        .codeblock {
            position: relative;
        }

        .codeblock .code-btn {
            position: absolute;
            top: 5px;
            right: 5px;
            bottom: 5px;
            left: 5px;
            border: none;
            background: none;
            font-size: 14px;
            cursor: pointer;
            color: #555;
        }

        form {
            margin-top: 20px;
        }

        label {
            font-weight: bold;
            font-size: 14px;
        }

        input[type="text"] {
            padding: 8px 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
            font-size: 14px;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        #loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 999;
        }

        #loader::after {
            content: "";
            width: 50px;
            height: 50px;
            border: 5px solid #fff;
            border-top: 5px solid #4CAF50;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        #send {
          margin-left: auto;
          margin-right: auto;
          display: block;
          width: 100%;
      }
    </style>

  <script>
    function createPopup(codeContent) {
      const popupContainer = document.createElement('div');
      popupContainer.style.position = 'fixed';
      popupContainer.style.top = '50%';
      popupContainer.style.left = '50%';
      popupContainer.style.transform = 'translate(-50%, -50%)';
      popupContainer.style.padding = '20px';
      popupContainer.style.background = '#fff';
      popupContainer.style.border = '1px solid #ccc';
      popupContainer.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
      popupContainer.style.zIndex = '9999';

      const codeTextarea = document.createElement('textarea');
      codeTextarea.value = codeContent;
      codeTextarea.style.width = '100%';
      codeTextarea.style.height = '200px';
      codeTextarea.style.border = '1px solid #ddd';
      codeTextarea.style.padding = '10px';
      codeTextarea.style.boxSizing = 'border-box';
      codeTextarea.readOnly = true;
      popupContainer.appendChild(codeTextarea);

      const copyButton = document.createElement('button');
      copyButton.textContent = 'Copy';
      copyButton.style.marginTop = '10px';
      copyButton.style.padding = '5px 10px';
      copyButton.style.background = '#45a049';
      copyButton.style.color = '#fff';
      copyButton.style.border = 'none';
      copyButton.style.cursor = 'pointer';
      copyButton.addEventListener('click', function () {
        navigator.clipboard.writeText(codeContent)
          .then(() => {
            document.body.removeChild(popupContainer);
          })
          .catch((error) => {
            console.error("Failed to copy code:", error);
          });
      });

      popupContainer.appendChild(copyButton);

      const cancelButton = document.createElement('button');
      cancelButton.textContent = 'Cancel';
      cancelButton.style.marginTop = '10px';
      cancelButton.style.padding = '5px 10px';
      cancelButton.style.background = '#aaa';
      cancelButton.style.color = '#fff';
      cancelButton.style.border = 'none';
      cancelButton.style.cursor = 'pointer';
      cancelButton.addEventListener('click', function () {
        document.body.removeChild(popupContainer);
      });

      popupContainer.appendChild(cancelButton);

      document.body.appendChild(popupContainer);
    }

    window.addEventListener("load", function() {
      document.getElementById("loader").style.display = "none";
    });

    function copyCode(event) {
      const codeContent = event.target.parentElement.querySelector('xmp').textContent;
      createPopup(codeContent);
    }
  </script>

</head>
<body>
  <div id="loader"></div>
    <div id="chatbox">
        <h1 id="title">
        <img src="https://i.postimg.cc/0QY6ctyj/CHARDS-BOT.png" alt="ChardsBot Icon" style="vertical-align: middle; margin-right: 10px; width: 30px;">
        Chat AI
      </h1>

        <form method="POST">
            <label for="question">Question:</label><br>
            <input type="text" id="question" name="question" placeholder="Type your questions here..."required><br><br>
            <button id="send" type="submit">Send</button>
            <div id="loading-spinner">
                <div class="loader"></div>
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $question = urlencode($_POST['question']);
          $url = "https://nguyen-chard-api.joshuag06.repl.co/api/ai/richardretada.gpt4_access?q=$question";
          $response = file_get_contents($url);
          $data = json_decode($response, true);

          if (isset($data['result'])) {
              $result = $data['result'];
            if (isset($result['content']) && isset($result['reply'])) {
                    $content = $result['content'];
                    $reply = $result['reply'];
                } else {
                    if (!isset($result['content'])) {
                        $content = 'No content found in the response';
                    }
                    if (!isset($result['reply'])) {
                        $reply = 'No reply found in the response';
                    }
                }
            } else {
                echo 'Invalid response format. Please try again later.';
            }
            echo "<h3>You:</h3>";
            echo "<p>$content</p>";

            echo "<h3>AI:</h3>";

          $codeBlockStart = "```";
          $codeBlockEnd = "```";

          $replyIndex = 0;

          while (true) {
              $startIndex = strpos($reply, $codeBlockStart, $replyIndex);

              if ($startIndex === false) {
                  echo "<p>" . nl2br(substr($reply, $replyIndex)) . "</p>";
                  break;
              }

              $endIndex = strpos($reply, $codeBlockEnd, $startIndex + strlen($codeBlockStart));

              if ($endIndex === false) {
                  echo "<p>" . nl2br(substr($reply, $replyIndex)) . "</p>";
                  break;
              }

              $codeIndex = $startIndex + strlen($codeBlockStart);
              $codeContent = substr($reply, $codeIndex, $endIndex - $codeIndex);
              $beforeCode = substr($reply, $replyIndex, $startIndex - $replyIndex);
              $afterCode = substr($reply, $endIndex + strlen($codeBlockEnd));

              echo "<p>" . nl2br($beforeCode) . "</p>";
              echo "<div class='codeblock'>";
              echo "<xmp style='background-color: #333; color: #fff; padding: 15px; border-radius: 5px; overflow: auto;'>$codeContent</xmp>";
              echo "<button class='code-btn' onClick='copyCode(event)'></button>";
              echo "</div>";

              $replyIndex = $endIndex + strlen($codeBlockEnd);

          }

            echo "  <script>document.getElementById('question').value = '';</script>";
        }
        ?>
    </div>
    <div id="footer">
        <p>Credits to Richard Retada || scraped gpt4 + gen bin</p>
    </div>

  <br>
  <br>
  <div id="ping"></div>
  <script>
    function updatePing() {
      const start = performance.now();
      const pingText = document.querySelector('#ping');

      fetch('/')
        .then(() => {
          const end = performance.now();
          const time = end - start;
          pingText.textContent = `Ping: ${time.toFixed(2)} ms`;
          if (time < 300) {
            pingText.style.color = 'green';
          } else if (time >= 301 && time <= 400) {
            pingText.style.color = 'yellow';
          } else if (time >= 401 && time <= 500) {
            pingText.style.color = 'orange';
          } else {
            pingText.style.color = 'red';
          }
        })
        .catch((error) => console.error(error));
    }

    setInterval(updatePing, 1000);
    updatePing();
  </script>
</body>
</html>
