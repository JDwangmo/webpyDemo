import web
import os
from web import form

# from web.wsgiserver import CherryPyWSGIServer

render = web.template.render('templates/')

simple_form = form.Form(
    form.Textbox('username', description='Username'),
    form.Textbox('mobile', description='Mobile'),
    form.Textbox('qq', description='QQ'),
    form.Textbox('s_province', description='s_province'),
    form.Textbox('s_city', description='s_city'),
    form.Textbox('s_county', description='s_county'),
    form.Textbox('product', description='product'),
    form.Textbox('address', description='address'),
    form.Textbox('guest', description='guestd'),
)

urls = (
    '/hello/(.*)', 'hello',
    '/index', 'index',
    '/images/(.*)', 'images',  # this is where the image folder is located....
    '/submit', 'submit',
    '/files/(.*)', 'files'
)
app = web.application(urls, globals())

db = web.database(dbn='postgres', db='exampledb', user='dbuser', pw='wangwang')

# ssl_cert = 'ssl_crt/server.crt'
# ssl_key = 'ssl_crt/server.key'
# CherryPyWSGIServer.ssl_certificate = ssl_cert
# CherryPyWSGIServer.ssl_private_key = ssl_key


class files:
    def GET(self, file):

        cType = {
            "png": "images/png",
            "jpg": "images/jpeg",
            "gif": "images/gif",
            "ico": "images/x-icon",
            "js": "text/javascript",
            "css": "text/css",
            "html": "text/html",
        }
        # print(file, file.split('.')[-1])
        try:
            web.header("Content-Type", cType.get(file.split('.')[-1], 'text/text'))  # Set the Header

            f = open('files/' + file, 'r')
            return f.read()
        except:
            return ''  # you can send an 404 error here if you want


class hello:
    def GET(self, name):
        if not name:
            name = 'World'
        return 'Hello, ' + name + '!'


class index:
    def GET(self):
        return render.index()


class images:
    def GET(self, name):
        ext = name.split(".")[-1]  # Gather extension

        cType = {
            "png": "images/png",
            "jpg": "images/jpeg",
            "gif": "images/gif",
            "ico": "images/x-icon"}

        if name in os.listdir('images'):  # Security
            web.header("Content-Type", cType[ext])  # Set the Header
            # print(name)
            return open('images/%s' % name, "rb").read()  # Notice 'rb' for reading images
        else:
            raise web.notfound()


class submit:
    def POST(self):
        f = simple_form()
        data = web.input(_unicode=False)
        # print(f, data)
        if not f.validates(source=data):
            return render.hello('world')
        else:
            out_str = {}
            for input in simple_form.inputs:
                # out_str += '%s:%s\t' %(input.name, f.d.get(input.name))
                out_str[input.name] = f.d.get(input.name)
            sequence_id = db.insert('yichutang_log',
                                    date=web.SQLLiteral("NOW()"),
                                    **out_str
                                    )
            print(out_str)
            return render.submit_res_page()


if __name__ == "__main__":
    app.run()
