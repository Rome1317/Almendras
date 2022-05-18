<Navbar bg="dark" variant="dark">
        <Container className = "space">
          <Navbar.Brand href="/main">
            <Logo  className="d-inline-block align-top" class="logo-main"/>
          </Navbar.Brand>
          <Search className="icon"/>
          <Form className="d-flex">
            <FormControl
              type="search"
              placeholder="Search something" 
              className="me-2 search"
              aria-label="Search"
              href="/search"
            />
          </Form>
          <Nav>
            <Nav.Link className="links" href="#home">Movies</Nav.Link>
            <Nav.Link className="links" href="#home">Series</Nav.Link>
            <Nav.Link className="links" href="#home">Videogames</Nav.Link>
            <Nav.Link className="links" onClick={routeChange}>Account</Nav.Link>
            <Dropdown>
              <Dropdown.Toggle variant="success" id="dropdown-basic">
                Create
              </Dropdown.Toggle>
              <Dropdown.Menu>
                <Dropdown.Item href="/category-form">Category</Dropdown.Item>
                <Dropdown.Item href="/category-form">Classification</Dropdown.Item>
                <Dropdown.Item href="/company-form">Company</Dropdown.Item>
                <Dropdown.Item href="/content-form">Content</Dropdown.Item>
                <Dropdown.Item href="/review-form">Review</Dropdown.Item>
                <Dropdown.Item href="/role-form">Role</Dropdown.Item>
                <Dropdown.Item href="/category-form">Subcategory</Dropdown.Item>
              </Dropdown.Menu>
            </Dropdown>
          </Nav>
        </Container>
</Navbar>