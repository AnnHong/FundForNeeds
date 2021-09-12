function _defineProperty(obj, key, value) {if (key in obj) {Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true });} else {obj[key] = value;}return obj;}const { Component } = React;

class EntryPage extends Component {
  constructor(props) {
    super(props);_defineProperty(this, "changeView",





    view => {
      this.setState({
        currentView: view });

    });_defineProperty(this, "currentView",

    () => {
      switch (this.state.currentView) {
        case "signUp":
          return /*#__PURE__*/(
            React.createElement("form", null, /*#__PURE__*/
            React.createElement("h2", null, "Sign Up!"), /*#__PURE__*/
            React.createElement("fieldset", null, /*#__PURE__*/
            React.createElement("legend", null, "Create Account"), /*#__PURE__*/
            React.createElement("ul", null, /*#__PURE__*/
            React.createElement("li", null, /*#__PURE__*/
            React.createElement("label", { for: "username" }, "Username:"), /*#__PURE__*/
            React.createElement("input", { type: "text", id: "username", required: true })), /*#__PURE__*/

            React.createElement("li", null, /*#__PURE__*/
            React.createElement("label", { for: "email" }, "Email:"), /*#__PURE__*/
            React.createElement("input", { type: "email", id: "email", required: true })), /*#__PURE__*/

            React.createElement("li", null, /*#__PURE__*/
            React.createElement("label", { for: "password" }, "Password:"), /*#__PURE__*/
            React.createElement("input", { type: "password", id: "password", required: true })))), /*#__PURE__*/



            React.createElement("button", null, "Submit"), /*#__PURE__*/
            React.createElement("button", { type: "button", onClick: () => this.changeView("logIn") }, "Have an Account?")));


          break;
        case "logIn":
          return /*#__PURE__*/(
            React.createElement("form", null, /*#__PURE__*/
            React.createElement("h2", null, "Welcome Back!"), /*#__PURE__*/
            React.createElement("fieldset", null, /*#__PURE__*/
            React.createElement("legend", null, "Log In"), /*#__PURE__*/
            React.createElement("ul", null, /*#__PURE__*/
            React.createElement("li", null, /*#__PURE__*/
            React.createElement("label", { for: "username" }, "Username:"), /*#__PURE__*/
            React.createElement("input", { type: "text", id: "username", required: true })), /*#__PURE__*/

            React.createElement("li", null, /*#__PURE__*/
            React.createElement("label", { for: "password" }, "Password:"), /*#__PURE__*/
            React.createElement("input", { type: "password", id: "password", required: true })), /*#__PURE__*/

            React.createElement("li", null, /*#__PURE__*/
            React.createElement("i", null), /*#__PURE__*/
            React.createElement("a", { onClick: () => this.changeView("PWReset"), href: "#" }, "Forgot Password?")))), /*#__PURE__*/



            React.createElement("button", null, "Login"), /*#__PURE__*/
            React.createElement("button", { type: "button", onClick: () => this.changeView("signUp") }, "Create an Account")));


          break;
        case "PWReset":
          return /*#__PURE__*/(
            React.createElement("form", null, /*#__PURE__*/
            React.createElement("h2", null, "Reset Password"), /*#__PURE__*/
            React.createElement("fieldset", null, /*#__PURE__*/
            React.createElement("legend", null, "Password Reset"), /*#__PURE__*/
            React.createElement("ul", null, /*#__PURE__*/
            React.createElement("li", null, /*#__PURE__*/
            React.createElement("em", null, "A reset link will be sent to your inbox!")), /*#__PURE__*/

            React.createElement("li", null, /*#__PURE__*/
            React.createElement("label", { for: "email" }, "Email:"), /*#__PURE__*/
            React.createElement("input", { type: "email", id: "email", required: true })))), /*#__PURE__*/



            React.createElement("button", null, "Send Reset Link"), /*#__PURE__*/
            React.createElement("button", { type: "button", onClick: () => this.changeView("logIn") }, "Go Back")));


        default:
          break;}

    });this.state = { currentView: "signUp" };}


  render() {
    return /*#__PURE__*/(
      React.createElement("section", { id: "entry-page" },
      this.currentView()));


  }}


ReactDOM.render( /*#__PURE__*/React.createElement(EntryPage, null), document.getElementById("app"));
