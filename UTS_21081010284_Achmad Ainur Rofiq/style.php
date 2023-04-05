<style>
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #4A4A4A;
  }

  li {
    float: left;
  }

  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
    font-family: 'Arial', sans-serif;
    font-weight: bold;
    font-size: 16px;
    transition: background-color 0.3s;
  }

  li a:hover {
    background-color: #6B6B6B;
  }

  .current {
    background-color: #2D2D2D;
  }

  thead {
    align-items: center;
    background-color: #d3d3d3;
  }

  .data-table {
    border-collapse: collapse;
    width: 100%;
  }

  .data-table th, .data-table td {
    text-align: center;
    padding: 8px 16px;
  }

  .data-table tbody tr:nth-child(odd) {
    background-color: #f2f2f2;
  }
</style>
