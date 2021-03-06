import React, { Component, PropTypes } from 'react/addons';
import classNames from 'classnames';
import shallowCompare from '../vendor/shallowCompare';

class WinnerTile extends Component {

  static propTypes = {
    id: PropTypes.number,
    item: PropTypes.shape({
      rank: PropTypes.number,
      description: PropTypes.string,
      candidate: PropTypes.shape({
        name: PropTypes.string,
        url: PropTypes.string,
        thumbnail: PropTypes.string,
      }),
    }),
    selected: PropTypes.bool,
    onClick: PropTypes.func,
  };

  constructor() {
    super();

    this.onClick = this.onClick.bind(this);
  }

  /**
   * Only re-render this component if props or state change.
   * @param {object} nextProps - Props that the component will receive
   * @param {object} nextState - State that the component will receive
   * @returns {boolean}
   */
  shouldComponentUpdate(nextProps, nextState) {
    return shallowCompare(this, nextProps, nextState);
  }

  /**
   * Send click event to parent component.
   * @param {MouseEvent} event - 'click'
   */
  onClick(event) {
    event.preventDefault();
    this.props.onClick(this.props.item);
  }

  /**
   * Render component.
   * @returns {XML}
   */
  render() {
    const classes = classNames('tile', {
      'is-active': this.props.selected,
    });

    return (
      <article className={classes}>
        <a className="wrapper" href={this.props.item.candidate.url} onClick={this.onClick}>
          <div className="tile__meta">
            <h1>{this.props.item.candidate.name}</h1>
          </div>
          <img alt={this.props.item.candidate.name} src={this.props.item.candidate.thumbnail} />
          <span className="button -round tile__action">{this.props.item.rank}</span>
        </a>
      </article>
    );
  }

}

export default WinnerTile;
