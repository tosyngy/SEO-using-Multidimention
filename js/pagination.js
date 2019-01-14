/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


/*
 * @paginate package
 * @author Sebastian Tschan
 * @copyright (c) Sebastian Tschan
 * @license GNU Affero General Public License
 * @link https://blueimp.net/ajax/
 */

// Overriding client side functionality:


// Example - Overriding the replaceCustomCommands method:
paginate.replaceCustomCommands = function(text, textParts) {
	return text;
}
