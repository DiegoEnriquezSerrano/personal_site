
<style type="text/css">
    /*------columns------*/
    
    #columnContainer {
    
    display: block;
    max-width: 100vw;
    height: 100vh;
    overflow-x: auto;
    border: 0px solid red;
  }
  
  #columnGrid {
    display: grid;
    grid-auto-flow: column;
    grid-auto-columns: 500px;
    grid-column-gap: 20px;
    max-width: 100%;
    overflow-x: auto;
    z-index: 3;
    border: 0px solid yellow;
    border-radius: 35px;
  }
  
  .column {
    display: flex;
    flex-direction: column;
    padding: 10px;
    border: 0px solid blue;
    max-height: 95vh;
    transition: 0.2s;
    justify-content: center
  }
  
  .column:hover {
    cursor: pointer;
    padding-bottom: 15px;
  }
  
  .column h2 {
    color: var(--main-font-color);
    text-shadow: var(--mini-text-shadow);
    font-family: 'nativeFont_01';
    padding-bottom: 10px;
    transition: 0.1s;
  }
  
  .column h2:hover {
    color: var(--sec-font-color);
    text-shadow: var(--sec-text-shadow);
  }
  
  .column span {
    display: inline-block;
    border-radius: 15px;
    background-color: rgba( 175, 175, 175, 1.0);
    border: 10px solid rgba( 175, 175, 175, 1.0);
    transition: 
      box-shadow 0.2s,
      background-color 0.2s,
      margin-top 0.2s;
    margin-bottom: 0;
    hyphens: auto;
    overflow: hidden;
  }
  
  .column span > p {
    padding: 5px;
  }
  
  .column span > p::first-letter {
    padding-left: 5px;
  }
  
  .column:hover span {
    box-shadow: 0 10px 10px -3px rgba( 0, 0, 0, 0.6 );
    margin-top: -5px;
  }

  
  /*------/columns------*/
</style>

<div id="columnContainer">
  <div id="columnGrid">

    <div class="column">
      <h2>Lorem ipsum dolor sit amet</h2><span><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></span>
    </div><!--column-->

    <div class="column">
      <h2>Lorem ipsum dolor</h2><span><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></span>
    </div><!--column-->

    <div class="column">
      <h2>Lorem ipsum dolor sit amet consectetur</h2><span><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></span>
    </div><!--column-->

    <div class="column">
      <h2>Lorem ipsum dolor sit amet consectetur: Adipisching elit, sed do eiusmod</h2><span><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></span>
    </div><!--column-->

  </div><!--columnGrid-->
</div><!--cloumnContainer-->

<script>
//------START COLUMNS---------
const columns = Array.from(_d.getElementsByClassName("column"));

const columnContainer = _d.getElementById("columnGrid");
for( i = 0 ; i < columns.length ; i++ ) {
 //console.log(columns[i].offsetTop); 
 //console.log(columns[i].offsetHeight);
}
//------END COLUMNS---------
</script>
