
const container = document.getElementById("container");

/**
 * Updates the specified color component (red, green, or blue) of an RGB color string with a new value.
 *
 * @param {string} colorString - The RGB color string in the format 'rgb(r, g, b)'.
 * @param {string} component - The color component to update ('r' for red, 'g' for green, 'b' for blue).
 * @param {number} newValue - The new value for the specified color component (0-255).
 * @returns {string} The updated RGB color string.
 * @throws {Error} Throws an error if the component is not 'r', 'g', or 'b'.
 */

function updateColorComponent(colorString, component, newValue) {
    // Extract the RGB values from the color string
    const rgbValues = colorString.match(/\d+/g).map(Number);

    // Update the corresponding component
    switch (component) {
        case 'r':
            rgbValues[0] = newValue;
            break;
        case 'g':
            rgbValues[1] = newValue;
            break;
        case 'b':
            rgbValues[2] = newValue;
            break;
        default:
            throw new Error('Invalid component');
    }

    // Return the updated color string
    return `rgb(${rgbValues[0]}, ${rgbValues[1]}, ${rgbValues[2]})`;
}


/**
 * Adds input event listeners to all input elements on the page to update the background color of the container element.
 * The input elements should have names 'red', 'green', or 'blue' to correspond to the RGB color components.
 */
window.document.querySelectorAll("input")
    .forEach((input) => {
        input.addEventListener("input", (e) => {
            const name = e.target.name;
            const value = e.target.value;
            let style = container.style.backgroundColor
            switch (name) {
                case "red":
                    style = updateColorComponent(style, 'r' , value);
                    break;
                case "green":
                    style = updateColorComponent(style, 'g', value);
                    break;
                case "blue":
                    style = updateColorComponent(style, 'b', value);
                    break;
            
                default:
                    break;
            }
            container.style.backgroundColor = style;
            // console.log(`Slider ${name} | Current Position ${value}`);
        })
})
