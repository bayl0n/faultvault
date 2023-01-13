from flask import Flask

app = Flask(__name__)


@app.route("/")
def hello_world():
    return "<p> Hello world!</p>"


@app.route("/hello")
@app.route("/hello/<name>")
def stinky_cat(name=None):
    if (name):
        return f'<p>Hello, {name}</p>'
    else:
        return f'<p>You don\'t have a name, stinky...</p>'
