import requests
import json
url = 'https://104.es/wp-json/wp/v2/posts'
text = requests.get(url).text
posts = json.loads(text)
for post in posts:
    print(post['title']['rendered'])