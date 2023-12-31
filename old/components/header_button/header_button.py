from django_components import component

@component.register("header_button")
class Header_button(component.Component):
    # Templates inside `[your apps]/components` dir and `[project root]/components` dir will be automatically found. To customize which template to use based on context
    # you can override def get_template_name() instead of specifying the below variable.
    template_name = "header_botton/header_botton.html"

    # This component takes one parameter, a date string to show in the template
    def get_context_data(self, dest):
        return {
            "dest": dest,
        }

    class Media:
        css = "header_button/header_button.css"
        js = "header_button/header_button.js"